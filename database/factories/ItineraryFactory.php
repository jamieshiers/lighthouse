<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Itinerary;
use Faker\Generator as Faker;

$factory->define(Itinerary::class, function (Faker $faker) {
    return [
        'cruise_number' => $faker->word,
        'day_number' => $faker->randomNumber(),
        'port_id' => factory(\App\Models\Port::class),
        'dress_id' => factory(\App\Dresscode::class),
        'berth' => $faker->word,
        'arrival' => $faker->dateTime(),
        'departure' => $faker->dateTime(),
        'offset' => $faker->randomNumber(),
        'clock_change_time' => $faker->dateTime(),
        'sunrise' => $faker->dateTime(),
        'sunset' => $faker->dateTime(),
        'weather_description' => $faker->word,
        'weather_temperature' => $faker->randomFloat(0, 0, 9999999999.),
    ];
});
