<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\car::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement([
            'Honda',
            'Toyota',
            'Ford',
        ]),
        'Model' => str_random(7),
        'Year' => rand(2018, 2020)
    ];
});

