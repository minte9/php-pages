<?php 
/**
 * Default Controller
 * 
 * Install Annotations:
 *      composer require annotations
 * 
 * config/routes.yaml not needed
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
     * @Route("/hello/{name}")
     */
    public function hello($name)
    {
        return new Response("Hello $name");
    }
}
