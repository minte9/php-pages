<?php
/**
 * In PHP Variables are one of only two identifier types ...
 * that are case-sensitive.
 * 
 * The other are constants.
 */

error_reporting(E_ALL);

$Name = "John";
echo $name; 
    // Undefined variable: name

const NAME = "Bob";
echo name;
    //Undefined constant: name