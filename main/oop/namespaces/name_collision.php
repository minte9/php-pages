<?php
/** 
    Without namespaces (old way) - Class name collision
    PHP will throw a fatal error because both classes have the same name.
*/

// Logger class from VendorA
class Logger {
    public function log($message) {
        echo "VendorA Logger: " . $message;
    }
}

// Logger class from VendorB
class Logger {
    public function log($message) {
        echo "VendorB Logger: " . $message;
    }
}

/**
    > php old_way.php

    PHP Fatal error:  
    Cannot declare class Logger, because the name is already in use.
 */