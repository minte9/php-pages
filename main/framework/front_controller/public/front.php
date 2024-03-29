<?php
/*
    front_controller/public/front.php - Single Entry Application

    Request::getPathInfo() returns the front controller script name.
    $map associates URL paths with their corresponding PHP script paths.

    cd github/php-pages/main/framework/front_controller/
    composer require symfony/http-foundation
    php -S localhost:8000 public/front.php

    http://localhost:8000/hello     # Hello World
    http://localhost:8000/bye       # Goodbye!
    http://localhost:8000/front.php # Page not found
*/

ini_set('display_errors', 1);
require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

$map = [
    '/hello' => __DIR__ . '/../src/pages/hello.phtml',
    '/goodby' => __DIR__ . '/../src/pages/goodby.phtml',
];

$path = $request->getPathInfo();

if (isset($map[$path])) {
    ob_start();
    
    require($map[$path]);
    $response->setContent(ob_get_clean()); // Look here
    
} else {
    $response->setStatusCode(404);
    $response->setContent("Page not found");
}

$response->send();