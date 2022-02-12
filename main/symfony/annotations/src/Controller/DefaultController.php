<?php 
/**
 * Default Controller
 * 
 * src/Controller/DefaultController.php
 * 
 * http://localhost:8000/           # Hello World
 * http://localhost:8000/page/2     # Page 2
 * 
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * config/routes.yaml
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

    /** 
     * @Route("/page/{id}", name="page", requirements={"id"="\d+"})
     */
    public function page($id)
    {
        return new Response("Page $id");
    }
}
