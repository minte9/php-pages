<?php
/**
 * Front Controller - public/front.php
 * 
 * In computer science, Separation Of Concerns is a design principle 
 * for separting a computer program in different sections. 
 * Each section addresses a separate concern.
 * This is called a modular program, easy to reused and replaced.
 * 
 * Our application will have four different layers.
 * 
 *      /public/front.php
 *      /src/Simplex
 *      /src/NumberChecker
 *      /src/app.php
 * 
 * The front controller is the only php code exposed to the client.
 * It gets the Request and sends the Response.
 * It provides a place to initialize the framework of the app.
 * 
 * ------------------------------------------------------------
 * 
 * composer.json
 * {
 *      "require": {
 *          "symfony/routing": "^6.0",
 *          "symfony/http-foundation": "^6.0",
 *          "symfony/http-kernel": "^6.0"
 *      },
 *      "autoload": {
 *          "psr-4": {"": "src/"}
 *      }
 * }
 * composer dump-autoload
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
$routes = include __DIR__.'/../src/app.php'; // App configuration

$context = new RequestContext();
$context->fromRequest($request);
$matcher = new UrlMatcher($routes, $context);

$controllerResolver = new ControllerResolver();
$argumentResolver = new ArgumentResolver();

$framework = new Simplex\Framework( // Simplex framework
    $matcher, $controllerResolver, $argumentResolver
);

$response = $framework->handle($request);
$response->send();