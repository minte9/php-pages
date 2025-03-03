<?php
/**
 * PHP-DI (dependency injection container) example.
 * PHP-DI will automatically resolve dependencies, making our code 
 * cleaner and more maintainable.
 * 
 * Install PHP-DI with composer:
 * 
 * composer require php-di/php-di
 */

require __DIR__ . '/vendor/autoload.php';

use DI\Container;
use function DI\create;
use function DI\get;

use Myproject\Logger\LoggerInterface;
use Myproject\Logger\ConsoleLogger;
use Myproject\Logger\FileLogger;
use Myproject\UserService;

// Create a DI container
$container = new Container();

// Configure dependencies
$container->set(LoggerInterface::class, create(ConsoleLogger::class));

// Get service from container
$service = $container->get(UserService::class);

// Use the servie
$service->createUser("Jon Doe");


// User another dependency
$container = new Container();
$container->set(LoggerInterface::class, create(FileLogger::class)); // Look Here
$service = $container->get(UserService::class);
$service->createUser("Jon Doe");

/**
    > php DI_container.php

    [Console] log message:User Jon Doe created.
    [File] log message:User Jon Doe created.
*/