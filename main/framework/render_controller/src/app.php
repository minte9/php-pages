<?php 
/**
 * App Configuration - src/app.php
 * 
 * This is rather flexible as you can change Response object afterwards.
 */

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('bye', new Route('bye'));
$routes->add('hello', new Route('/hello/{name}', [
    'name' => 'World',
    '_controller' => 'render_template' // Render Controller
]));

function render_template($request)
{
    extract($request->attributes->all(), EXTR_SKIP);
    ob_start();
    include sprintf(__DIR__.'/../src/pages/%s.phtml', $_route);
    return new Response(ob_get_clean());
}

return $routes;
