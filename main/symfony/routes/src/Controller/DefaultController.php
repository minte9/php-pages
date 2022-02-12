<?php
/**
 * Default Controller:
 * 
 * src/Controller/DefaultController.php
 * 
 * http://localhost:8000/                           # Hello World
 * http://localhost:8000/page/2                     # Page 2
 * http://localhost:8000/php/symfony-routing-2      # Path: php, symfony, routing, 2
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index()
    {
        return new Response("Hello World");
    }

    public function page($id)
    {
        return new Response("Page $id");
    }

    public function seo($catg, $slug, $id)
    {
        $subcatg = explode("-", $slug)[0];
        $title   = explode("-", $slug)[1];

        return new Response("Path: $catg, $subcatg, $title, $id");
    }
}
