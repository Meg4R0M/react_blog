<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class ArticlesController extends Controller
{
    /**
     * @Route("/articles", name="articles")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('App:Articles')->findAll();

        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $jsonArticles = $serializer->serialize($articles, 'json');

        return new JsonResponse(
            $jsonArticles,
            200,
            array(),
            true
        );
    }

    /*
     * @Route("/articles/{slug}", name="articles_categorie")
     */
    public function indexByCategorie($slug)
    {
        $em = $this->getDoctrine()->getManager();

        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $categorie = $em->getRepository('App:Categories')->findOneBy(['nom' => $slug]);
        if (!$categorie){
            $error = $serializer->serialize('This categorie does not exist', 'json');
            return new JsonResponse(
                $error,
                404,
                array(),
                true
            );
        }

        $id = $categorie->getId();

        $articles = $em->getRepository('App:Articles')->byCategorie($id);

        if (!$articles){
            $error = $serializer->serialize('No articles found in this categorie', 'json');
            return new JsonResponse(
                $error,
                200,
                array(),
                true
            );
        }

        $jsonArticles = $serializer->serialize($articles, 'json');

        return new JsonResponse(
            $jsonArticles,
            200,
            array(),
            true
        );
    }

    /**
     * @Route("/articles/search/{slug}", name="articles_search")
     */
    public function searchArticle($slug)
    {
        $em = $this->getDoctrine()->getManager();

        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $articles = $em->getRepository('App:Articles')->recherche($slug);

        if (!$articles){
            $error = $serializer->serialize('No articles found with this search terms => '.$slug, 'json');
            return new JsonResponse(
                $error,
                200,
                array(),
                true
            );
        }

        $jsonArticles = $serializer->serialize($articles, 'json');

        return new JsonResponse(
            $jsonArticles,
            200,
            array(),
            true
        );
    }

}
