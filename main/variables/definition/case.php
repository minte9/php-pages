<?php
/**
 * In PHP Variables are one of only two identifier types ...
 * that are case-sensitive
 * 
 * The other are constants
 */

$Name = "John";
const NAME = "Bob";

var_dump(isset($name)); // false

//echo name;
    //Undefined constant: name