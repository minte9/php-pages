<?php

/**
 * LogController
 * 
 * Symfony comes packed with a lot of usefull classes (services).
 * 
 * When you need a service in controller ...
 * type-hint an argument with its class (or interface) name.

 * http://localhost:8000/log/123
 *      # var/log/dev.log
 *      # [2022-02-12] app.INFO: We are loggin id 123   
 * 
 * http://localhost:8000/setsession     # Session foo set
 * http://localhost:8000/getsession     # Session foo get: bar
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Psr\Log\LoggerInterface; # composer require logger
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class LogController extends AbstractController
{
    #[Route("/log/{id}")]
    public function index($id, LoggerInterface $logger) // Look Here
    {
        $logger->info("We are loggin id $id");
        return new Response('logging');
    }

    #[Route("/setsession")]
    public function setsession(SessionInterface $session)
    {
        $session->set('foo', 'bar');
        return new Response("Session foo set");
    }

    #[Route("/getsession")]
    public function getsession(SessionInterface $session) 
    {
        $foo = $session->get('foo', 'bar');
        return new Response("Session foo get: $foo");
    }
}
