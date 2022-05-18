<?php

/**
 * Ternary
 * 
 * x = expr1  ? expr2 : expr3
 * x = expr2 if expr1 = TRUE
 */

$a = 1;
$b = 1;

echo ($a == $b  ? "true" : "false"); // true


/**
 * Ternary shorthand
 * 
 * x = expr1 ?: expr3
 * x = expr1 if expr1 = TRUE
 */

$a = 1;
$b = 2;

echo ($a ?: $b); // 1


/**
 * Null coalescing
 * 
 * x = expr1 ?? expr2
 * x = expr1 if expr1 exists and not null
 */

 echo ($n ?? "None"); // None