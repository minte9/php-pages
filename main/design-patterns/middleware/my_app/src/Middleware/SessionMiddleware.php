<?php

namespace App\Middleware;

use App\Logger;

class SessionMiddleware implements MiddlewareInterface {
    public function handle($request) {
        session_start();

        if (!isset($_SESSION['username'])) {
            $_SESSION['username'] = 'Guest';
        }

        return $request;
    }
}