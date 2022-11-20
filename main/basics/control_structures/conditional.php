<?php

/**
 * Conditional assigment operators
 * 
 * Ternary operator: 
 *      is a shorthand for the if ... else statement. 
 * 
 * Null coalescing: 
 *      is a shorthand for if does not exist or is NULL
 */

$a = 1;

echo $a == 1 ? 1 : 2;       // 1
echo !empty($b) ? $b : 2;   // 2
echo $b ?? 2;               // 2