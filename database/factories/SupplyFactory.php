<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Supply;
use Faker\Generator as Faker;

$factory->define(Supply::class, function (Faker $faker) {
    return [
        "quantity" => $faker->numberBetween(20,88),
        "price" => $faker->randomElement([
            100,500,5000,2000,7000,21000
        ]),
        "confirmed_at" => now(),
    ];
});
