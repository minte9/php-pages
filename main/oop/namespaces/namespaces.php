<?php
/**
 * Two libraries might have classes with the same name.
 * To prevent name collisions we use namespaces.
 * 
 * Namespaces are a way to group classes, interfaces, functions and constants 
 * under a common name.
 * 
 * To define a namespace we use the keyword 'namespace'
 */

 namespace Google {
    class Logger {
        public function log($message) {
            echo "Google: " . $message . PHP_EOL;
        }
    }
}

namespace Yahoo {
    class Logger {
        public function log($message) {
            echo "Yahoo: " . $message . PHP_EOL;
        }
    }
}

namespace {
    // Global namespace

    $google = new \Google\Logger();
    $google->log("Hello World!");  // Google: Hello World!

    $yahoo = new \Yahoo\Logger();
    $yahoo->log("Hello World!");  // Yahoo: Hello World!
}