<?php
/**
 * PHP will implicitly change the type of a variable as needed.
 * 
 * This contrasts with strongly typed languages, like C and Java.
 * In Java variables can only contain one type of data ...
 * throughout their existence. 
 */

$a = "abc";
echo gettype($a); // string

$a = 0 + "1";
echo gettype($a); // integer

$a = new ArrayObject();
echo gettype($a); // object