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
}
