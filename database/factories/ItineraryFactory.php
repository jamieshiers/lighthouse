<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Itinerary;
use Faker\Generator as Faker;

$factory->define(Itinerary::class, function (Faker $faker) {
    return [
        'cruise_number' => $faker->word,
        'day_number' => $faker->randomNumber(),
        'port_id' => factory(\App\Port::class),
        'dress_id' => factory(\App\Dresscode::class),
        'arrival' => $faker->dateTime(),
        'departure' => $faker->dateTime(),
        'offset' => $faker->randomNumber(),
        'sunrise' => $faker->dateTime(),
        'sunset' => $faker->dateTime(),
        'weather' => $faker->word,
    ];
});
