<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    $engineType = collect([
        'Diesel',
        'Gasoline',
        'Natural Gas'
    ]);

    return [
        'brand' => $faker->text(20),
        'model' => $faker->text(30),
        'year' => $faker->numberBetween(1960, 2017),
        'maxSpeed' => $faker->numberBetween(20, 300),
        'isAutomatic' => $faker->boolean(50),
        'engine' => $engineType->random(),
        'numberOfDoors' => $faker->numberBetween(2, 5)
    ];

});
