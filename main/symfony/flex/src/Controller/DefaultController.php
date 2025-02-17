<?php
/**
 * DefaultController
 * 
 * src/Controller/DefaultController
 * 
 * Starting from Symfony 5.0 support for PHP templates was removed.
 * Only Twig templates can be used.
 * 
 * http://localhost:8000/hello              # Hello WORLD
 * http://localhost:8000/hello/Symfony      # Hello SYMFONY
 * 
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController 
{
    /**
     * @Route("/hello/{name}")
     */
    public function hello($name='World')
    {
        return $this->render('default/index.html.twig', [
            'name' => $name,
        ]);
    }
}