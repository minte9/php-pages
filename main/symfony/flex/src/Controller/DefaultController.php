<?php
/**
 * DefaultController
 * 
 * src/Controller/DefaultController
 * 
 * Starting from Symfony 5.0 support for PHP templates was removed.
 * Only Twig templates can be used.
 * 
 * http://localhost:8000/                   # Hello World
 * http://localhost:8000/hello/Symfony      # Hello Simfony
 * 
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController 
{
    /**
     * @Route("/")
     */
    public function index() 
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/hello/{name}")
     */
    public function hello($name)
    {
        return $this->render('default/hello.html.twig', [
            'name' => $name,
        ]);
    }
}