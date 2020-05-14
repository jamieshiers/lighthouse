<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DayActivity;
use Faker\Generator as Faker;

$factory->define(DayActivity::class, function (Faker $faker) {
    return [
        'promotion_id' => factory(\App\Promotion::class),
        'venue_id' => factory(\App\Room::class),
        'start' => $faker->dateTime(),
        'finish' => $faker->dateTime(),
        'show_end_time' => $faker->word,
        'bandsheet' => $faker->word,
        'horizon' => $faker->word,
    ];
});
