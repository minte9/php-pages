<?php
/**
 * In PHP variables are passed by value (not by reference).
 * A reference allows two different variable names to point to the same 
 * memory location.
 */

 $a =  10; 
$b =& $a;  // $b references $a 
$b =  20;
echo $a;   // 20