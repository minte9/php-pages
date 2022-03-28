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
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;

$request = Request::createFromGlobals();
$routes = include __DIR__.'/../src/app.php';

$context = new RequestContext();
$context->fromRequest($request);
$matcher = new UrlMatcher($routes, $context);

$controllerResolver = new ControllerResolver();
$argumentResolver = new ArgumentResolver();

$framework = new Simplex\Framework(
    $matcher, $controllerResolver, $argumentResolver
);

$response = $framework->handle($request);
$response->send();