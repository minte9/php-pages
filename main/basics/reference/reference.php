<?php

$a = 1; 

$x = $a; 
$y =& $a; // Look Here

$a = 2;

echo $x; // 1
echo $y; // 2