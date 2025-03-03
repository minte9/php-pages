<?php

namespace Myproject;

use Myproject\Logger\LoggerInterface;

class UserService {
    private $logger;
 
    // Initialize the dependency via constructor param
    public function __construct(LoggerInterface $logger) { // Look Here
        $this->logger = $logger; 
    }
 
    public function createUser($username) {
        $this->logger->log("User $username created.");
    }
 }