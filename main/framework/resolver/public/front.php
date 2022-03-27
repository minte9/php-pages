<?php
/**
 * Front Controller - public/front.php
 * 
 * The render controller is always instantiated, 
 * even if URL doesn't match the route.
 * 
 * It will be bettter if the controllers are lazy-loaded.
 * We will use HttpKernel for that.
 * 
 * Argument resolver getArguments() inspects the controller signature.
 * It determines which arguments to pass using PHP reflexion.
 * 
 * ------------------------------------------------------------
 * 
 * composer require symfony/http-foundation
 * composer require symfony/routing
 * composer require symfony/http-kernel
 * 
 * php -S localhost:8000 public/front.php
 * 
 * http://localhost:8000/isEven/24
 *      The number is Even
 * http://localhost:8000/isEven/123
 *      The number is Odd
 */

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;

$request = Request::createFromGlobals();
$routes = include __DIR__.'/../src/app.php';

$context = new RequestContext();
$context->fromRequest($request);
$matcher = new UrlMatcher($routes, $context);

try {
    $request->attributes->add(
        $matcher->match($request->getPathInfo())
    );

    $ctrResolver = new ControllerResolver(); // Look Here
    $argResolver = new ArgumentResolver();
    $controller = $ctrResolver->getController($request);
    $arguments = $argResolver->getArguments($request, $controller);

    $response = call_user_func_array(
        $controller, $arguments
    );
    
} catch(ResourceNotFoundException $e) {
    $response = new Response('Not found', 404);
} catch (Exception $e) {
    $response = new Response('An error occured', 500);
}

$response->send();