<?php

/**
 * Even if this example shows a property access, each call to $faker->name 
 * yields a different (random) result. 
 * 
 * This is because Faker uses __get() magic, and forwards Faker\Generator->$property 
 * calls to Faker\Generator->format($property).
 */

require_once __DIR__ . '/vendor/autoload.php';

$faker = Faker\Factory::create();

echo $faker->name . " | " . $faker->name . "\r\n";
echo $faker->address . "\r\n";
echo $faker->country . " | " . $faker->country . "\r\n";
echo $faker->countryCode . " | " . $faker->countryCode;

/*
    Queen Daniel | Rosario Blick
    80410 Mohr Mews
    Alisatown, LA 83654
    Gambia | United Kingdom
    EH | EE
 */