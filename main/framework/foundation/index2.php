<?php

/**
 * Request information - index2.php
 * 
 * php -S localhost:8000
 * http://localhost:8000/index2.php?name=Fabien
 */

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

$response = new Response();
$response->setContent(""
    . $request->get('name', 'World') // Fabien
    . $request->getPathInfo() // URI - /
    . $request->request->get('bar') // POST - null
    . $request->server->get('HTTP_HOST') // localhost:8000
    . $request->headers->get('host') // localhost:8000
    . $request->getMethod() // GET
);

$response->send();