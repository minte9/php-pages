<?php
/**
 * By default, function arguments in PHP are passed by value (copied).
 * If you want a function to modify the value, you pass it by reference 
 * (not recommended).
 */

function addFive(&$x) {
    $x += 5;
}

$a = 10;
addFive($a);
echo $a;   // 15