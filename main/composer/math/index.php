<?php
require_once __DIR__ . '/vendor/autoload.php';

use MathPHP\Algebra;
use MathPHP\Arithmetic;
use MathPHP\Functions\Map;
use MathPHP\LinearAlgebra\MatrixFactory;

// Greatest common divisor (GCD)
echo $gcd = Algebra::gcd(8, 12) . "\n"; // 4

// Sum of digits
echo $digit_sum = Arithmetic::digitSum(99) . "\n"; // 18

// Map functions
$x = [10, 10, 10, 10];
$y = [1,   2,  5, 10];
$products = Map\Multi::multiply($x, $y);

echo implode(", ", $products) . "\n"; // 10, 20, 50, 100

// Matrix
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];
$A = MatrixFactory::create($matrix);
$row = $A->getRow(2);

echo implode(", ", $row) . "\n"; // 7, 8, 9