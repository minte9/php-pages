<?php

/**
 * Request information - index2.php
 * 
 * php -S localhost:8000
 * http://localhost:8000/index2.php?name=Fabien
 */

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

echo $request->get('name', 'World'); // Fabien
echo $request->getPathInfo(); // URI - /
echo $request->request->get('bar'); // POST - null
echo $request->server->get('HTTP_HOST'); // localhost:8000
echo $request->headers->get('host'); // localhost:8000
echo $request->getMethod(); // GET