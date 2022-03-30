<?php

/**
 * Bitwise SHIFT
 * 
 * Shift bits of $a $n steps.
 * 
 * It rovides an easy (and very fast) way of ...
 * multiplying integers by a power of two.
 */

// Left
$a = 16;        // 00010000
echo $a << 2;   // 01000000 = 64

// Right
$a = 16;        // 00010000
echo $a >> 2;   // 00000100 = 4

// Multipy
$a = 1;         // 00000001
echo $a << 2;   // 00000100 = 4

// Demultiply
$a = 8;         // 00001000
echo $a >> 2;   // 00000010 = 2