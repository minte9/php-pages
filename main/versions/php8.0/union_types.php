<?php declare(strict_types=1);

/**
 * Union Types
 * 
 * Prior to PHP 8.0 you could only declare a single type for ...
 * properties, parameters, and return types.
 * 
 * To separate each datatype use pipe |
 * 
 * ?string - equivalent with string|null
 */

class A 
{
    private static int|float $i = 10; // Look Here

    public function add(int|float $n, ?string $name)
    {
        self::$i +=  $n;
    }

    public function get(): int|float
    {
        return self::$i;
    }
}

$a = new A();

$a->add(10, "one");
echo $a->get(); // 20

$a->add(2.2, NULL); 
echo $a->get(); // 22.2