<?php

/**
 * Bitwise NOT BOTH
 * 
 * Bits set in $a or $b but not in both
 */

$a = 9;     // 8 + 1; 00001001
$b = 10;    // 8 + 2; 00001010

echo $a ^ $b; // 3