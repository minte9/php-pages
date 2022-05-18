<?php

/**
 * AND
 * Evaluates to true if both ...
 * the left and right operands evaluate to true
 */

echo ( isset($a) && isset($b) ) ? " / both set" : "false";
    // false
$a = 1;
$b = 2;
echo ( isset($a) && isset($b) ) ? " / both set" : "false";
    // both set


/**
 * OR
 * Evaluates to true if either ...
 * the left or right operands evaluate to true.
 */

$c = 3;
echo ( isset($c) OR isset($d) ) ? " / at least one" : "false";
    // at least one


/**
 * XOR
 * Evaluates to true if either ...
 * the left and right operands evaluates to true ...
 * but not both
 */

$a = "1";
$b = "abc";
echo ( is_numeric($a) XOR is_numeric($b) ) ? " / only one number" : "false";
    // only one number


/**
 * It's important to understand that ...
 * all logical operators only work with Boolean values.
 * 
 * PHP will first convert any other value to a Boolean ...
 * and then perform the operation.
 */

echo 1 && "abc" ? " / both true" : "false";
    // both true