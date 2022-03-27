<?php 
/**
 * Is Even App - src/app2.php
 * 
 * $_controller can be any valid PHP callback.
 * 
 * A controller resolver knows what controller to execute, based on the Request.
 * It supports supports strings composed of a class name followed by two colons.
 */

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();
$routes->add('isEven', new Route('/isEven/{number}', [
    '_controller' =>  'CheckNumberController::index', // Look Here
]));

class CheckNumberController
{
    public function index ($number)   // Look Here
    {
        if ($this->isEven($number)) {
            return new Response("The number is Even");
        }
        return new Response("The number is Odd");
    }

    public function isEven($number)
    {
        return $number % 2 == 0;
    }
}

return $routes;
