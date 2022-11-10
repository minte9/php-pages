<?php

/**
 * List constructor
 * 
 * Very often used with string explode
 */

list($surname, $name, $age) = ["John", "Smith", "34", "07288333"];
echo "$surname $name is $age years old"; 
    // Ouput: John Smith is 34 years old

$date = '25/05/2012';
list($day, $month, $year) = explode('/', $date);
echo $month; // 05