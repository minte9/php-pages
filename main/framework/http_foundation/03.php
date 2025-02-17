<?php

/*
    http_foundation/03.php - Response simulation

    http://localhost:8000/03.php
        Page not found - 404
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