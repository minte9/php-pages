<?php

/**
 * Bitwise NOT
 * 
 * Bits set in $a but not in $b
 */

$a = 9;         // 8 + 1; 00001001
$b = 10;        // 8 + 2; 00001010

echo $a & ~$b;  // 1

$a = 9;         // 8 + 1; 00001001
$b = 10;        // 8 + 2; 00001010

echo ~$a & $b;  // 2