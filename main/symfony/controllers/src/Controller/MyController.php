<?php

/**
 * MyController
 * 
 * Symfony will pass the Request object to any controller argument 
 * that is type-hinted with the Request class.
 * 
 * http://localhost:8000/my             # Welcome to your new controller
 * http://localhost:8000/info?page=3    # Page 3 is Not Ajax
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController extends AbstractController
{
    #[Route('/my', name: 'my')]
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MyController.php',
        ]);
    }

    #[Route('/info')]
    public function info(Request $request): Response
    {
        $page = $request->query->get('page');
        $ajax = $request->isXmlHttpRequest() ? 'Ajax' : 'Not Ajax';
        
        return new Response(
            "Page $page is $ajax"
        );
    }
}
