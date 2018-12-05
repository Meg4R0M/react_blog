<?php

namespace App\Controller;

use App\Entity\Categories;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Lexik\Bundle\JWTAuthenticationBundle\Exception\InvalidTokenException;
use Lexik\Bundle\JWTAuthenticationBundle\Exception\ExpiredTokenException;
use Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\CookieTokenExtractor;
use Lexik\Bundle\JWTAuthenticationBundle\Security\Authentication\Token\PreAuthenticationJWTUserToken;
use Symfony\Component\Serializer\SerializerInterface;

use App\Entity\Articles;
use Limenius\Liform\Liform;
use App\Form\Type\ArticleType;

class AdminController extends Controller
{

    /**
     * @Route("/admin", name="admin")
     * @param SerializerInterface $serializer
     * @param Request $request
     * @return Response
     */
    public function adminAction(SerializerInterface $serializer, Request $request)
    {
        try {
            $token = $this->getValidToken($request);
            $nbArticles = $this->getDoctrine()
                ->getRepository(Articles::class)
                ->getNb();
            $nbCategories = $this->getDoctrine()
                ->getRepository(Categories::class)
                ->getNb();
            return $this->render('admin/index.html.twig', [
                'authToken' => $token,
                'nbArticles' => $serializer->normalize($nbArticles),
                'nbCategories' => $serializer->normalize($nbCategories)
            ]);
        } catch (\Exception $e) {
            return $this->render('admin/index.html.twig', [
                'authToken' => null,
                'nbArticles' => null,
                'nbCategories' => null
            ]);
        }
    }

    /**
     * @Route("/admin/articles/", name="admin_articles")
     * @param Liform $liform
     * @param SerializerInterface $serializer
     * @param Request $request
     * @return Response
     */
    public function adminArticlesAction(Liform $liform, SerializerInterface $serializer, Request $request)
    {
        try {
            $token = $this->getValidToken($request);
            $recipe = new Articles();
            $form = $this->createForm(
                ArticleType::Class,
                $recipe,
                array('csrf_protection' => false)
            );

            $recipes = $this->getDoctrine()
                ->getRepository(Articles::class)
                ->findAll();

            return $this->render('admin/articles.html.twig', [
                'authToken' => $token,
                'articles' => $serializer->normalize($recipes),
                'schema' => $liform->transform($form),
                'initialValues' => $serializer->normalize($form->createView()),
            ]);
        } catch (\Exception $e) {
            return $this->render('admin/articles.html.twig', [
                'authToken' => null,
                'schema' => null,
                'articles' => [],
                'initialValues' => null,
                'props' => [ ],
            ]);
        }
    }

    /**
     * @Route("/admin/api/form", methods={"GET"}, name="admin_form")
     * @param Liform $liform
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function getFormAction(Liform $liform, Request $request, SerializerInterface $serializer)
    {
        $recipe = new Articles();
        $form = $this->createForm(ArticleType::Class, $recipe);
        return new JsonResponse([
            'schema' => $liform->transform($form),
            'initialValues' => $serializer->normalize($form->createView()),
        ]);
    }

    /**
     * @Route("/admin/api/recipes", methods={"POST"}, name="liform_post")
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse|Response
     */
    public function liformPostAction(Request $request, SerializerInterface $serializer)
    {
        $recipe = new Articles();
        $data = json_decode($request->getContent(), true);
        $form = $this->createForm(ArticleType::Class, $recipe);
        $form->submit($data);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($recipe);
            $em->flush();

            $response = new Response($serializer->serialize($recipe, 'json'), 201);
            $response->headers->set('Location', 'We should provide a url here, but this is a dummy example and there is no location where you can retrieve a single recipe, so...');
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
        return new JsonResponse($serializer->normalize($form), 400);
    }

    private function getValidToken(Request $request)
    {
        $tokenExtractor = new CookieTokenExtractor('BEARER');

        if (false === ($jsonWebToken = $tokenExtractor->extract($request))) {
            return;
        }

        $preAuthToken = new PreAuthenticationJWTUserToken($jsonWebToken);
        try {
            if (!$payload = $this->get('lexik_jwt_authentication.jwt_manager')->decode($preAuthToken)) {
                throw new InvalidTokenException('Invalid JWT Token');
            }
            $preAuthToken->setPayload($payload);
        } catch (JWTDecodeFailureException $e) {
            if (JWTDecodeFailureException::EXPIRED_TOKEN === $e->getReason()) {
                throw new ExpiredTokenException();
            }
            throw new InvalidTokenException('Invalid JWT Token', 0, $e);
        }
        return $preAuthToken;
    }
}
