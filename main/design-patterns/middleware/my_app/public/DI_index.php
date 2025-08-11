<?php

/**
 * The $request parameter is not injected into the middleware.
 * It is just passing data for processing.
 * The middleware doesn't own the $request.
 * 
 * Here is an example of injecting a dependency into the middleware.
 * 
 * myapp/
 *      composer.json 
 *      public/
 *          DI_index.php
 *      src/
    *      Middleware/
    *      Logger.php
 *      vendor/  
 */


require __DIR__ . '/../vendor/autoload.php';

use App\Middleware\SessionMiddleware2;
use App\Logger;

// Simulate a request
$request = $_GET;

// Create dependency
$logger = new Logger();

// Run the middleware
$md = new SessionMiddleware2($logger);
$md->handle($request);

// Display the session username
echo "Welcome, " . $_SESSION['username'] . "!". PHP_EOL;

/**
 * php public/DI_index.php
 * 
 * [LOG]: Session started with default user: Guest
 * Welcome, Guest!
 */