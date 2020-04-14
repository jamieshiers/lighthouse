<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Port;
use Faker\Generator as Faker;

$factory->define(Port::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'country_id' => factory(\App\Country::class),
        'image' => $faker->word,
        'description' => $faker->text,
    ];
});
