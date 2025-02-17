<?php

/**
 * Ternary
 * 
 * x = expr1 ? expr2 : expr3
 * x = expr2 if expr1 = TRUE
 * 
 * Ternary shorthand
 * 
 * x = expr1 ?: expr3
 * x = expr1 if expr1 = TRUE
 * 
 * Null coalescing
 * 
 * x = expr1 ?? expr2
 * x = expr1 if expr1 exists and not null
 */

$a = 1;
$b = 1;

var_dump($a == $b ? "true" : "false");  // true
var_dump($a ?: $b);                     // 1
var_dump($n ?? "None");                 // None