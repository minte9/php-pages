<?php // composer require fzaninotto/faker

require __DIR__ . '/vendor/autoload.php';

$faker = Faker\Factory::create();

echo $faker->name; // Buck Mohr
echo $faker->name; // Eloisa Wuckert
echo $faker->name; // Jessica Keeling

echo $faker->address; // Bertachester, IN 2354406568 Daisha Locks Suite 522
echo $faker->address; // Lake Lolafurt, AZ 55458009 Marvin Dale
echo $faker->address; // Mafaldamouth, VA 92131

echo $faker->country; // Bulgaria
echo $faker->countryCode; // PF