<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Port;
use Faker\Generator as Faker;

$factory->define(Port::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'country_id' => factory(\App\Models\Country::class),
        'image' => $faker->word,
        'description' => $faker->text,
    ];
});
