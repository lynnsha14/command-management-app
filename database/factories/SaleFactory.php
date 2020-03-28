<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Sale;
use Faker\Generator as Faker;

$factory->define(Sale::class, function (Faker $faker) {
    return [
        "quantity" => $faker->randomElement([
            50,20,40,70,80,30
        ])
    ];
});
