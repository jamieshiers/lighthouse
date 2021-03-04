<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\GuestLog;
use Faker\Generator as Faker;

$factory->define(GuestLog::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomNumber(),
        'booking_reference' => $faker->word,
        'short_description' => $faker->word,
        'status' => $faker->randomElement(['Closed', '']),
        'guest_emotion' => $faker->randomNumber(),
        'opened_by' => $faker->randomNumber(),
    ];
});
