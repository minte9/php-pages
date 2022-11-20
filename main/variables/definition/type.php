<?php
/**
 * PHP will implicitly change the type of a variable as needed.
 * 
 * This contrasts with strongly typed languages, like C and Java
 */

$a = "abc";
$b = 0 + "1";
$c = new ArrayObject();

echo gettype($a); // string
echo gettype($b); // integer
echo gettype($c); // object