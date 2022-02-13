<?php

/**
 * Conditional assigment
 * 
 * Ternary operator: 
 *      is a shorthand for the if ... else statement. 
 * 
 * Null coalescing: 
 *      is a shorthand for if does not exist or is NULL
 */

$a = 1;

echo $a == 1 ? 1 : 2;   // 1

echo $b ? 1 : 2;        // 2 - Warning b undefined

echo $c ?? 2;           // 2