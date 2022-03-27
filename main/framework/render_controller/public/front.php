<?php
/**
 * Front Controller - public/front.php
 * 
 * We can replace call_user_func argument with any valid callback. 
 * As a convention, for each route, the associated controller ...
 * is $_controller route attribute.
 * 
 * ------------------------------------------------------------
 * 
 * composer require symfony/http-foundation
 * composer require symfony/routing
 * 
 * php -S localhost:8000 public/front.php
 * 
 * http://localhost:8000/hello/Fabien
 *      Hello Fabien
 */

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;

$request = Request::createFromGlobals();
$routes = include __DIR__.'/../src/app.php';

$context = new Routing\RequestContext();
$context->fromRequest($request);
$matcher = new Routing\Matcher\UrlMatcher($routes, $context);

try {
    $request->attributes->add(
        $matcher->match($request->getPathInfo())
    );
    $response = call_user_func( // Render Controller
        $request->attributes->get('_controller'), $request
    );

} catch(Routing\Exception\ResourceNotFoundException $e) {
    $response = new Response('Not found', 404);
} catch (Exception $e) {
    $response = new Response('An error occured', 500);
}

$response->send();