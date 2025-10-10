<?php
/**
 * Bitwise operators allow us to perform operation on binary (bit-level) 
 * representation of integers.
 * 
 * Each integer is stored in binary (a sequence of bits - 0s and 1s), and
 * bitwise operations move those bits directly.
 * 
 * A bit is a representation of 1 or 0.
 * A byte is made up of 8 bits.
 * 
 * Negative numbers are stored as the bitwise NOT of the number, plus 1.
 */

$a = 6;  // 110 (binary) OR 00000110
$b = 3;  // 011 (binary)

echo $a & $b;  // Bitwise AND = 010 (binary), 2 (decimal)
echo $a | $b;  // Bitwise OR = 111 (binary), 7 (decimal)
echo $a ^ $b;  // Bitwise XOR = 101 (binary), 5 (decimal)
echo ~$a;      // Bitwise NOT = 11111001 (binary), -7 (decimal)
echo $a << 1;  // Left SHIFT = 1100 (binary), 12 (decimal)
echo $a >> 1;  // Right SHIFT = 011 (binary), 3 (decimal)
