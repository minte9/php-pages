<?php
/*
    http_foundation/02.php - Request Object
*/

require_once __DIR__.'/vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

echo $request->get('name', 'World');        // Fabien
echo $request->getPathInfo();               // URI - /
echo $request->request->get('bar');         // POST - null
echo $request->server->get('HTTP_HOST');    // localhost:8000
echo $request->headers->get('host');        // localhost:8000
echo $request->getMethod();                 // GET