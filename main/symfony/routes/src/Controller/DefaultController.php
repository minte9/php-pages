<?php
/**
 * Default Controller:
 * 
 * src/Controller/DefaultController.php
 * 
 * http://localhost:8000/                           # Index page
 * http://localhost:8000/hello                      # Hello World
 * http://localhost:8000/page                       # Page 1
 * http://localhost:8000/page/2                     # Page 2
 * http://localhost:8000/php/symfony-6              # php, symfony, 6
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
        return new Response("Index page");
    }

    public function hello($name)
    {
        return new Response("Hello $name");
    }

    public function page($id)
    {
        return new Response("Page $id");
    }

    public function page_slug($catg, $slug, $id)
    {
        return new Response("$catg, $slug, $id");
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