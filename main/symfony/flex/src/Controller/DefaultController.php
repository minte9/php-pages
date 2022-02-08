<?php

/**
 * src/Controller/DefaultController
 * 
 * http://localhost:8000/hello/Symfony
 *      Hello Simfony
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController 
{
    /**
     * @Route("/")
     * 
     * templates/default/index.html.twig
     */
    public function index() 
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/hello/{name}")
     * 
     * templates/default/hello.html.twig
     */
    public function hello($name)
    {
        return $this->render('default/hello.html.twig', [
            'name' => $name,
        ]);
    }
}