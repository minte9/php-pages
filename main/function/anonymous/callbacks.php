<?php

/**
 * Callbaks with filter and map
 */

$A = array(0, 3, 10);

$B = array_filter( $A, fn($x) => $x % 2 == 0 ); // isEven  

$C = array_map( fn($x) => $x*$x, $A) ; // square 

print_r($B); // [0, 100]
print_r($C); // [0, 9, 100]