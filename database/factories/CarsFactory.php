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
        'mark' => $faker->text(20),
        'model' => $faker->text(30),
        'year' => $faker->numberBetween(1960, 2017),
        'max_speed' => $faker->numberBetween(20, 300),
        'is_automatic' => $faker->boolean(50),
        'engine' => $engineType->random(),
        'number_of_doors' => $faker->numberBetween(2, 5)
    ];

});
