<?php 
/**
 * Is Even App - src/app.php
 */

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('isEven', new Routing\Route('/isEven/{no}', [
    'no' => null,
    '_controller' =>
        'NumberChecker\Controller\CheckNumberController::index',
            // Look Here
]));

return $routes;

