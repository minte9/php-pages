<?php

$a = function($var) {
    $b = "Hello $var";
    return $b;
};  // ; at the end

echo $a('World'); // outputs: Hello World