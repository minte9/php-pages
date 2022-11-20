<?php

/**
 * PHP automaticaly assign a number as key ...
 * The new key > the greatest key
 * 
 * Array keys are case-sensitive, but type insensitive
 */

$A = array(2 => 5);
$B = array('4' => 5, 'a' => 'b');
$C = ['A' => 1, 'a' => 2, '1' => 3, 1=> 4, '01' => 5];

$A[] = 'a'; // key = 3
$B[] = 44;  // key = 5

var_dump($A[3] == 'a'); // true
var_dump($B[5] == 44);  // true

var_dump($C['A'] == $C['a']); // false
var_dump($C['1'] == $C[1]);  // true

print_r($C); // A=>1, a=>2, 1=>4, 01=>5