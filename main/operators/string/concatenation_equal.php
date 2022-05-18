<?php

$a = "a";
$b = "b";

echo $a .= $b; // ab

# Using the + operator (like in Java) ...
# will result in TypeError (PHP 8+)

echo $a += $b; // Unsupported operant types