<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {
    return [
        'iso' => $faker->word,
        'name' => $faker->name,
        'nice_name' => $faker->word,
        'iso3' => $faker->word,
        'numcode' => $faker->randomNumber(),
        'phonecode' => $faker->randomNumber(),
        'emergency' => $faker->word,
        'currency_name' => $faker->word,
        'currency_symbol' => $faker->word,
    ];
});
