<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 26/05/18
 * Time: 10:38
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Template("default/index.html.twig")
     * @Route("/{reactRouting}", name="index", requirements={"reactRouting"=".+"}, defaults={"reactRouting": null})
     */

    public function index()
    {
        $items = array("chien", "chat", "poule");

        return $this->render('default/index.html.twig', array(
            'items' => $items
        ));
    }

}