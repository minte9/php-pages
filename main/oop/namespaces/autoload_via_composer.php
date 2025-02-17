<?php
/**
    Instead of manually creating autoload.php, 
    we can use Composer for PSR-4 autoloading.

    Create composer.json:

    > composer init

    Then, modify composer.json to include:

        {
            ...
            "autoload": {
                "psr-4": {
                    "VendorA\\": "vendor/vendorA/",
                    "VendorB\\": "vendor/vendorB/"
                }
            }
        }

    Run composer autoload:

    > composer dump-autoload

    Project structure will be:

        my_project/
            vendor/
                composer/
                    autoload_psr4.php
                    autoload_real.php
                    ...
                VendorA/
                    Logger.php
                VendorB/
                    Logger.php
                autoload.php
        autoload_via_composer.php
 */

require "vendor/autoload.php"; // Now using Composer's autoload

use vendorA\Logger as LoggerA; // Uppercase paths
use vendorB\Logger as LoggerB;

$loggerA = new LoggerA();
$loggerA->log("Logging with vendorA");

$loggerB = new LoggerB();
$loggerB->log("Logging with vendorB");

/**
    > php autoload_via_composer.php

    VendorA Logger: Logging with vendorA
    VendorB Logger: Logging with vendorB
 */

