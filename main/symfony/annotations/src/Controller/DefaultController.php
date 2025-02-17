<?php 
/**
 * Default Controller
 * 
 * src/Controller/DefaultController.php
 * 
 * Annotation adds route above method ...
 * config/routes.yaml not neeeded.
 * 
 * http://localhost:8000/default/           # Index page
 * http://localhost:8000/default/hello      # Hello world
 * http://localhost:8000/default/page/3     # Page 3
 * 
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/default")
 */
class DefaultController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return new Response("Index page");
    }

    /**
     * @Route("/hello/{name}", defaults={"name"="world"})
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
