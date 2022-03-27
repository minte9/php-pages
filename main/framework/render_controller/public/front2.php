<?php
/**
 * public/front2.php
 * 
 * php -S localhost:8000 public/front2.php
 * 
 * http://localhost:8000/isEven/24
 *      Yes, the number is Even
 * http://localhost:8000/isEven/123
 *      No, the number is Odd
 *
 */

ini_set('display_errors', 1);
require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;

$request = Request::createFromGlobals();
$routes = include __DIR__.'/../src/app2.php'; // Look Here

$context = new Routing\RequestContext();
$context->fromRequest($request);
$matcher = new Routing\Matcher\UrlMatcher($routes, $context);

try {
    $request->attributes->add(
        $matcher->match($request->getPathInfo())
    );
    $response = call_user_func(
        $request->attributes->get('_controller'), $request
    );
} catch(Routing\Exception\ResourceNotFoundException $e) {
    $response = new Response('Not found', 404);
} catch (Exception $e) {
    $response = new Response('An error occured', 500);
}

$response->send();
