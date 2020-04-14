<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DressCode;
use Faker\Generator as Faker;

$factory->define(DressCode::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'short_description' => $faker->text,
        'long_description' => $faker->text,
        'image' => $faker->word,
    ];
});
