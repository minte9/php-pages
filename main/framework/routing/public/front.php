<?php
/**
 * Front Controller - public/front.php
 * 
 * Following the MVC pattern is not the right goal.
 * The main goal should be Separartions of Concerns SoC.
 * 
 * Route configuration moved to its own file (app.php)
 * Routes names are used for template names.
 * 
 * Based on $routes information (RouteCollection instance),
 * a UrlMatcher instance can match URL paths.
 * 
 * The matched route is automaticaly stored in _route attribute.
 * Attributes are extracted to keep template simple.
 * 
 * The request context is not strictly needed, 
 * but it is used in real-world applications
 * to enforce method requirements and more.
 * 
 * ----------------------------------------------------------
 * 
 * composer require symfony/http-foundation
 * composer require symfony/routing
 * 
 * php -S localhost:8000 public/front.php
 * 
 * http://localhost:8000/hello/Fabien
 *      Hello Fabien
 * http://localhost:8000/bye
 *      Goodbye! 
 */

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

$request = Request::createFromGlobals();
$routes = include __DIR__.'/../src/app.php';

$context = new RequestContext();
$context->fromRequest($request);
$matcher = new UrlMatcher($routes, $context);

try {
    extract($matcher->match($request->getPathInfo(), EXTR_SKIP)); 
        // $_route = hello | bye
        // $name = Fabien | World
    
    ob_start();
    include sprintf(__DIR__.'/../src/pages/%s.phtml', $_route);
    $response = new Response(ob_get_clean());

} catch(ResourceNotFoundException $e) {
    $response = new Response('Not found', 404);

} catch (Exception $e) {
    $response = new Response('An error occured', 500);
}

$response->send();
