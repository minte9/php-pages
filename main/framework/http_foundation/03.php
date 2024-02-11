<?php

/**
 * Response simulation - index3.php
 * 
 * php -S localhost:8000
 * http://localhost:8000/index3.php
 */

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Response;

$response = new Response();
$response->setStatusCode(404);
$response->headers->set('Content-Type', 'text/html');
$response->setContent(
    "Page not found - " . $response->getStatusCode()
);

$response->send();
    // Page not found - 404