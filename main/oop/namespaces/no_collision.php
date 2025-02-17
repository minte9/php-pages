<?php
/**
    To avoid class name collision we use namespaces
 */

namespace VendorA;

 // Logger class from VendorA
class Logger {
    public function log($message) {
        echo "VendorA Logger: " . $message;
    }
}

namespace VendorB;

// Logger class from VendorB
class Logger {
    public function log($message) {
        echo "VendorB Logger: " . $message;
    }
}

$logger = new Logger();
$logger->log("Message from logger");

/**
    > php no_collision.php

    VendorB Logger: Message from logger
 */