<?php

/**
 * Plain PHP example.
 * 
 * The Middleware is a function that modifies the request 
 * before passing it to the next function.
 */

session_start();

// Middleware function to set the username
function authSessionMiddleware($next) {
    if (!isset($_SESSION['username'])) {
        $_SESSION['username'] = 'Guest';
    }

    // Call the next function in the pipeline
    $next();
}

// Application logic after middleware runs
function app() {
    echo "Welcome, " . $_SESSION['username'] . "!" . PHP_EOL;
}

// Execute middleware and the process the request
authSessionMiddleware('app');

/**
 * Wecome, Guest!
 */
