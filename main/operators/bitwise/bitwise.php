<?php

$a = 9; // 8 + 1; 00001001
$b = 10; // 8 + 2; 00001010

echo $a & $b; // 8

$a = 36; // 32 + 4; 00100100
$b = 103; // 64 + 32 + 4 + 2 + 1; 01100111

echo $a & $b; // 36
