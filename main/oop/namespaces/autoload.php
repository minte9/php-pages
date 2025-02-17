<?php 

/**
    This autoloader automatically converts namespace paths into file paths 
    and include them dynamically.
 */

function classAutoLoader($class) {
    // Convert namespace to full file path
    $file = __DIR__ . '/vendor/' . str_replace("\\", "/", $class . ".php");

    if (file_exists($file)) {
        require $file;
    }
}

spl_autoload_register("classAutoLoader");