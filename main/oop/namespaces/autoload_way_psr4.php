<?php
/**
    Using autoloading via PSR-4.
    This is the standar way to load classes without requiring each file manually.

    Project structure:
    my_project/
        vendor/
            VendorA/
                Logger.php
            VendorB/
                Logger.php
    autoload.php
    autoload_way_psr4.php
 */

require("autoload.php");

use vendorA\Logger as LoggerA; // alias
use vendorB\Logger as LoggerB;

$loggerA = new LoggerA();
$loggerA->log("Logging with vendorA");

$loggerB = new LoggerB();
$loggerB->log("Logging with vendorB");

/**
    > php autoload_way_psr4.php

    VendorA Logger: Logging with vendorA
    VendorB Logger: Logging with vendorB
 */