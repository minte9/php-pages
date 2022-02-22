<?php

/**
 * If the operator is placed after its operand, 
 * the interpreter will first return the value.
 * 
 * Incrementing or decrementing booleans has no effect.
 */

$a = 1;
echo $a++; // 1

$a = 1;
echo ++$a; // 2

$a = TRUE;
echo ++$a; // 1