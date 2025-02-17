<?php declare(strict_types=1);

/**
 * Union Types
 * 
 * Prior to PHP 8.0 you could only declare a single type for
 * properties, parameters, and return types
 * 
 * To separate each datatype use pipe
 * ?string - equivalent with string|null
 */

class MyClass 
{
    private int|float $i = 10; // Look Here
    
    public function set(int|float $n, ?string $name): void
    {
        $this->i +=  $n;
    }

    public function get(): int|float
    {
        return $this->i;
    }
}

$a = new MyClass();
$b = new MyClass();

$a->set(10, "one");
$b->set(5.5, NULL); 

echo $a->get(); // 20
echo $b->get(); // 5.5