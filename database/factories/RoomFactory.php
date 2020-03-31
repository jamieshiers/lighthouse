<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;
use Ramsey\Uuid\Uuid;

$factory->define(App\Room::class, function (Faker $faker) {

    static $user_id;

    return [
        'user_id' => $faker->randomDigitNotNull,
        'name' => $faker->name,
        'short_name' => $faker->name,
        'Capacity' => $faker->numberBetween($min = 0, $max = 850),
    ];
});
