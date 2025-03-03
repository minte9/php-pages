<?php
/**
 * Install autoload with Composer.
 * 
 * Create composer.json file:
 * 
 * {
 *      "autoload": {
 *           "psr-4": {
 *               "Myproject\\": "src/"
 *          }
 *      },
 *      "require": {}
 * }
 * 
 * Run `composer install`
 * 
 * src/
 *  Logger/
 *      ConsoleLogger.php
 *      FileLogger.php
 *      LoggerInterface.php
 *  UserService.php
 *  vendor/
 *  composer.json
 */

require __DIR__ . '/vendor/autoload.php';

use Myproject\Logger\LoggerInterface;
use Myproject\Logger\ConsoleLogger;
use Myproject\Logger\FileLogger;
use Myproject\UserService;

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
> php DI_composer.php

[Console] log message:User Jon Doe created.
[File] log message:User Jon Doe created.
*/