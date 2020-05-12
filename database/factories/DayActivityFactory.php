<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\DayActivity;
use Faker\Generator as Faker;

$factory->define(DayActivity::class, function (Faker $faker) {
    return [
        'promotion_id' => factory(\App\Models\Promotion::class),
        'venue_id' => factory(\App\Models\Room::class),
        'start' => $faker->dateTime(),
        'finish' => $faker->dateTime(),
        'show_end_time' => $faker->word,
        'bandsheet' => $faker->word,
        'horizon' => $faker->word,
    ];
});
