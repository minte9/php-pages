<?php

/**
 * Dependency Injection wrong approach
 * 
 * Initialize dependency class in dependant's constructor.
 * To use another dependency logger you'll need to alter the dependant class.
 * This is wrong.
 */

interface LoggerInterface {
   public function log($msg);
}

class OutputLogger implements LoggerInterface {
   public function log($msg) {
       echo "Output log message: " . $msg . PHP_EOL;
   }
}

class UserService {
   private $logger;

   // Initialize the dependency in constructor - Wrong
   public function __construct() {
       $this->logger = new OutputLogger();
   }

   public function createUser($username) {
       $this->logger->log("User $username created.");
   }
}

$service = new UserService();
$service->createUser("jon_doe");

/**
    Output log message:User jon_doe created.
*/