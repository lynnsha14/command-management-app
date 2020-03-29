<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\provider;
use Faker\Generator as Faker;

$factory->define(provider::class, function (Faker $faker) {
    return [
        "name" => $faker->firstName
    ];
});
