<?php

/**
 * sort(), natsort()
 */

$A = ['da', 'b', 'c'];
$B = ['10t', '2t', '3t'];

sort($A);
natsort($B); 

print_r($A); // b, c, da
print_r($B); // [1] => 2t [2] => 3t [0] => 10t