<?php

$a = 10;

echo $a == 10; // prone to error
echo 10 == $a; // better

$a = 9;

if ($a == 10) {}
if ($a = 10) {} // No alert error
if (10 == $a) {} // Better