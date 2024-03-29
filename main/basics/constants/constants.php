<?php
/**
 * Constants can be defined using the const keyword ...
 * or by using the define()
 * 
 * Can't be changed once set.
 * Can be accessed for any scope within a script.
 */

error_reporting(E_ALL);

define('A', '1');

// const A = 1; // Warning: Constant A already defined 
const B = 2;
const C = array(3);

{ 
    echo A;     # 1
    echo B;     # 2
    echo C[0];  # 3
}