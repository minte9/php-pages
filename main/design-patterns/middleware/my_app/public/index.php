<?php

/**
 * Real-life example of using middleware.
 * 
 * composer init
 *
 * myapp/
 *      composer.json 
 *      public/
 *          index.php
 *      src/
    *      Middleware/
    *          MiddlewareInterface.php
    *          SessionMiddleware.php
 *      vendor/  
 * 
 * composer dump-autoload
 */


require __DIR__ . '/../vendor/autoload.php';

use App\Middleware\SessionMiddleware;

// Simulate a request
$request = $_GET;

// Run the middleware
$md = new SessionMiddleware($request);
$md->handle($request);

// Display the session username
echo "Welcome, " . $_SESSION['username'] . "!". PHP_EOL;

/**
 * php public/index.php
 * 
 * Welcome, Guest!
 */
