<?php
/**
 * Anonymous function can inherit variables from the parent scope, 
 * using the keyword 'use'.
 */

$message = "Welcome";

$greet = function($name) use ($message) {
    return "$message, $name!";
};

echo $greet("Alice");  // Welcome, Alice!