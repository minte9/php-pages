<?php declare(strict_types=1);

/**
 * Prior to PHP 7.4 ...
 * 
 * Using strict data would have required ...
 * to enforce the data integrity.
 * 
 *      setBirthDate(DateTime $birthday): void
 *      getBirthDate(): \DateTime 

 * To mark property can be null, ...
 * prefix its type with a question mark
 */

class A 
{
    public DateTime $day;  // Look Here

    public function set($day) : void
    {
        $this->day = $day;
    }

    public function get() : String
    {
        return $this->day->format('d-m-Y');
    }
}

class B 
{
    public ?String $day; // Can be null
    public function __construct() {}
}

$a = new A();
$b = new B();

$a->set(new DateTime('2011-12-01'));
var_dump($a->get() == '01-12-2011'); // true

try {
    $a->day = null;
    $b->day = null;
} catch(TypeError $e) {
    echo $e->getMessage(); // Cannot assign null A::day
}