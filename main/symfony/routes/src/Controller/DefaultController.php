<?php

/**
 * Default Controller:
 * 
 * src/Controller/DefaultController.php
 * 
 * http://localhost:8000/
 *      Hello World
 * 
 * http://localhost:8000/hello/Symfony
 *      Hello Simfony
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index()
    {
        return new Response("Hello World!");
    }

    public function hello($name)
    {
        return new Response("Hello $name!");
    }
}
