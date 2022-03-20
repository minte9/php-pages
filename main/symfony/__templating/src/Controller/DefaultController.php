<?php
/**
 * Default Controller:
 * src/Controller/DefaultController.php
 * 
 * http://localhost:8000 # Hello Fabien
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Templating\Loader\FilesystemLoader;
use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\Helper\SlotsHelper;
use Symfony\Component\Templating\TemplateNameParser;

class DefaultController extends AbstractController
{
    public function index()
    {
        $data = array('firstname'=>'Fabien');
        return $this->show('hello.php', $data);
    }

    public function show($file, $data=[], Response $response = null): Response
    {
        $loader = new FilesystemLoader(__DIR__ . '/../views/%name%');
        $templating = new PhpEngine(new TemplateNameParser(), $loader);
        $templating->set(new SlotsHelper());

        return new Response(
            $templating->render($file, $data)
        );
    }
}