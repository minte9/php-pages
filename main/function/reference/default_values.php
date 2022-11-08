<?php

/**
 * Default function arguments
 */

function test($var1, &$var2 = null) 
{
    $var2 = "c";
}

$var1 = 'a';
$var2 = 'b';

test($var1, $var2);

echo $var2; // Output: c