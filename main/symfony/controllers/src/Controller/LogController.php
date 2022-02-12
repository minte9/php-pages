<?php

/**
 * LogController
 * 
 * Symfony comes packed with a lot of usefull classes (services).
 * 
 * When you need a service in controller ...
 * type-hint an argument with its class (or interface) name.
 * 
 * To see what services you can type-hint:
 * php bin/console debug:autowiring
 * 
 * Install Psr Logger:
 * composer require logger
 * 
 * http://localhost:8000/log/123
 *      # var/log/dev.log
 *      # [2022-02-12] app.INFO: We are loggin id 123       
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Psr\Log\LoggerInterface;

class LogController extends AbstractController
{
    #[Route('/log/{id}')]
    public function index($id, LoggerInterface $logger) // Look Here
    {
        $logger->info("We are loggin id $id");

        return new Response('logging');
    }
}
