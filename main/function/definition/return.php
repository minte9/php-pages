<?php

/**
 * Return is not a function, it is a language construct
 * Parantheses are not required
 * 
 * Function returns NULL, if you don't return a value
 */

function A() {
    return (1);
}
    
function B() {
    return 2; // faster
}
    
function C() {
    // return null, by default
}

var_dump(A() == 1);    // true
var_dump(B() == 2);    // true
var_dump(C() == null); // true