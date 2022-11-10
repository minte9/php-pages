<?php

/**
 * Unitialized array: 
 * PHP automaticaly converts to array
 * 
 * Echo don't display value type ...
 * and can't be used with arrays and object
 */

$x[] = 0;
$x['aa'] = 11;

var_dump($x); // array(2) { [0]=> int(0) ["aa"]=> int(11) } 

echo $x; // Warning: Array to string convertion