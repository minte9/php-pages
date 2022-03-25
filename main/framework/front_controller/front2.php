<?php
/**
 * front2.php
 * 
 * php -S localhost:8000 front2.php
 * 
 * http://localhost:8000/hello
 *      Hello World
 * http://localhost:8000/bye
 *      Goodbye!
 */

ini_set('display_errors', 1);
require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

$map = [
    '/hello' => __DIR__ . '/src/pages/hello.phtml',
    '/bye' => __DIR__ . '/src/pages/bye.phtml',
];

$path = $request->getPathInfo();

if (! isset($map[$path])) {
    $response->setStatusCode(404);
    $response->setContent("Page not found");
} else {
    ob_start();
    require($map[$path]);
    $response->setContent(ob_get_clean()); // Look here
}

$response->send();