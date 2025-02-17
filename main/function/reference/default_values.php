<?php

/**
 * Default function arguments
 */

function test($x, &$y = null) 
{
    $y = 100;
}

$x = 1;
$y = 2;

test($x, $y);
echo $y; // 100