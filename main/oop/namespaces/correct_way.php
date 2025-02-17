<?php
/**
    The correct way of using classes correctly in a script.
    We can use both Logger classes without issue.

    This is why modern PHP development, with Composer and PSR4-autoloading, 
    relies heavely on namespaces.
 */

namespace MyApp;

require 'vendor/vendorA/Logger.php';
require 'vendor/vendorB/Logger.php';

$loggerA = new \vendorA\Logger();
$loggerA->log("Logging with vendorA");

$loggerB = new \vendorB\Logger();
$loggerB->log("Logging with vendorB");

/**
    > php correct_way.php 

    VendorA Logger: Logging with vendorA
    VendorB Logger: Logging with vendorB
 */