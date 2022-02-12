<?php
/**
 * Default Controller:
 * 
 * src/Controller/DefaultController.php
 * 
 * http://localhost:8000/                           # Hello World
 * http://localhost:8000/page                       # Page 1
 * http://localhost:8000/page/2                     # Page 2
 * http://localhost:8000/php/symfony-routing-2      # php, symfony, routing, 2
 * http://localhost:8000/url                        # /java/threads-1001
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class DefaultController extends AbstractController
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

        return new Response("$catg, $subcatg, $title, $id");
    }

    public function url() {

        $link = $this->generateUrl('page_slug', [
            'catg' => 'java',
            'slug' => 'threads',
            'id' => 1001,
        ]);

        return new Response($link);
    }
}