<?php

/**
 * Herodoc strings
 * 
 * It is used for formating on multiple lines. 
 * You can use quotes without escaping.
 * 
 * The closing identifier must contain no characters, except a semicolon (;)
 * The first character after the closing identifier must be a newline. 
 */

$who = "John";
$output = <<<TEST
    She said "This is $who's test"
    on multiple rows
TEST;

echo nl2br($output);
/* 
    She said "This is John's test"
    on multiple rows
*/
