<?php declare(strict_types=1);

/**
 * Prior to PHP 7.4
 * 
 * This sort of strict data would have required ...
 * to enforce the data integrity.
 * 
 *      setBirthDate(DateTime $birthday): void
 *      getBirthDate(): \DateTime 
 * 
 * Unititalized state:
 * 
 * To mark a property can be null, prefix its type with a question mark.
 * Even if a property is nullable, its uninitialized value will not be null.
 */

class A 
{
    public ?String $name; // can be null
    public DateTime $birthday;

    public function setBirthDay($day) 
    {
        $this->birthday = $day;
    }

    public function getBirthDay()
    {
        return $this->birthday->format('d-m-Y');
    }
}

$a = new A();
$a->name = null; // set as null
$a->setBirthDay(new DateTime('2011-12-01'));
echo $a->getBirthDay(); // 01-12-2011

try {
    $a = new A();
    $a->name = 10;
} catch(TypeError $e) {
    echo $e->getMessage(); // Cannot assign int to property
}