<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'brand' => $faker->randomElement(array ('BMW', 'Mercedes', 'Toyota', 'Hyundai')),
        'model' => $faker->text(30),
        'year' => $faker->numberBetween(1960, 2017),
        'maxSpeed' => $faker->numberBetween(20, 300),
        'isAutomatic' => $faker->boolean(50),
        'engine' => $faker->randomElement(array ('diesel', 'petrol', 'electric', 'hybrid')),
        'numberOfDoors' => $faker->randomElement($array = array (3, 5, 7))
    ];

});
