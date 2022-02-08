<?php

/**
 * src/Controller/DefaultController
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController 
{
    /**
     * @Route("/hello/{name}")
     */
    public function hello($name)
    {
        return $this->render('default/index.html.twig', [
            'name' => $name,
        ]);
    }
}