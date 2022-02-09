<?php 
/**
 * Default Controller
 * 
 * Install Annotations:
 *      composer require annotations
 * 
 * config/routes.yaml not needed
 * 
 * Starting with PHP8 we can use attributes.
 * 
 * http://localhost:8000/hello/Symfony
 *      Hello Simfony
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return new Response("Hello World");
    }

    /** 
     * @Route("/hello/{x}")
     */
    public function hello($x)
    {
        return new Response("Hello $x");
    }

    #[Route('/go', name: 'action')]
    public function go()
    {
        return new Response("go");
    }
}
