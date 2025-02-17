<?php

/**
 * If the operator is placed after its operand, 
 * the interpreter will first return the value.
 * 
 * Incrementing or decrementing booleans has no effect.
 */

$a = 1;
echo $a++; // 1
echo ++$a; // 3

$b = true;
var_dump(++$b == true); // true
var_dump($b++ == true); // true