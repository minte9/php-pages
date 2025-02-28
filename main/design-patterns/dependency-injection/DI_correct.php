<?php

/**
 * Dependency Injection
 * 
 * The dependency class is injected via constructor.
 * This make the service more flexable and testable, we can easily swap the logger implementation.
 */

interface LoggerInterface {
   public function log($msg);
}

class ConsoleLogger implements LoggerInterface {
   public function log($msg) {
       echo "[Console] log message:" . $msg . PHP_EOL;
   }
}

class FileLogger implements LoggerInterface {
   public function log($msg) {
       echo "[File] log message:" . $msg . PHP_EOL;
   }
}

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

// Create an instance of dependency()
$logger = new ConsoleLogger();

// Inject the dependency into the service
$service = new UserService($logger); // Look Here
$service->createUser("Jon Doe");

// Swap to another dependecny
$logger = new FileLogger();
$service = new UserService($logger);
$service->createUser("Jon Doe");

/**
    [Console] log message:User Jon Doe created.
    [File] log message:User Jon Doe created.
*/