<?php

namespace App\Middleware;

use App\Logger;

class SessionMiddleware2 implements MiddlewareInterface {
    protected $logger;

    public function __construct($logger)
    {
        $this->logger = $logger;
    }

    public function handle($request) {
        session_start();

        if (!isset($_SESSION['username'])) {
            $_SESSION['username'] = 'Guest';
            $this->logger->log("Session started with default user: Guest");
        }

        return $request;
    }
}