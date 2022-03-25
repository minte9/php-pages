<?php
/**
 * Front Controller - front.php
 * 
 * Until now our application has only one page.
 * Let's extract the common code and create the framework.
 * 
 * The trick is the usage of Request::getPathInfo() which ...
 * removes the front controller script name.
 * 
 * composer require symfony/http-foundation
 * php -S localhost:8000 front.php
 * 
 * http://localhost:8000/hello
 *      Hello World
 * http://localhost:8000/bye
 *      Goodbye!
 * http://localhost:8000/front.php
 *      Page not found
 */

ini_set('display_errors', 1);
require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

$map = [
    '/hello' => __DIR__ . '/src/pages/hello.php',
    '/bye' => __DIR__ . '/src/pages/bye.php',
];

$path = $request->getPathInfo();

if (! isset($map[$path])) {
    $response->setStatusCode(404);
    $response->setContent("Page not found");
} else {
    require($map[$path]);
}

$response->send();