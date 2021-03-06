<?php

/**
 * Even if this example shows a property access, 
 * each call to $faker->name yields a different (random) result. 
 * 
 * This is because Faker uses __get() magic, and forwards 
 * Faker\Generator->$property calls to Faker\Generator->format($property).
 * 
 * composer require fzaninotto/faker
 */

require_once __DIR__ . '/vendor/autoload.php';

$faker = Faker\Factory::create();

echo $faker->name; // Buck Mohr
echo $faker->name; // Eloisa Wuckert
echo $faker->name; // Jessica Keeling

echo $faker->address; // Bertachester, IN 2354406568 Daisha Locks Suite 522
echo $faker->address; // Lake Lolafurt, AZ 55458009 Marvin Dale
echo $faker->address; // Mafaldamouth, VA 92131

echo $faker->country; // Bulgaria
echo $faker->countryCode; // PF