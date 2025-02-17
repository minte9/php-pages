<?php // src/app.php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();
$routes->add('isEven', new Route('/isEven/{no}', [
    'no' => null,
    '_controller' =>
        'NumberChecker\Controller\CheckNumberController::index',
]));

return $routes;