<?php

/**
 * Anonimous function - declaration
 */

$a = function($var) {
    return "Hello $var";
};  // ; at the end

echo $a('World'); // outputs: Hello World