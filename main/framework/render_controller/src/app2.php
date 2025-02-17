<?php 
/**
 * Is Even App - src/app2.php
 */

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('isEven', new Routing\Route('/isEven/{number}', [
    'number' => null,
    '_controller' => function($request) {

        $message = "The number is Odd";
        if (isEven($request->attributes->get('number'))) {
            $message = "The number is Even";
        }

        $request->attributes->set('message', $message);
        $response = render_template($request);
        return $response;
    }
]));

function isEven($number) : bool
{
    return $number % 2 == 0;
}

function render_template($request) : Response
{
    extract($request->attributes->all(), EXTR_SKIP);
    ob_start();
    include sprintf(__DIR__.'/../src/pages/%s.phtml', $_route);
    return new Response(ob_get_clean());
}

return $routes;