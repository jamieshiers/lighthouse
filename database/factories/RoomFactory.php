<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Room;
use Faker\Generator as Faker;
use Ramsey\Uuid\Uuid;

$factory->define(App\Models\Room::class, function (Faker $faker) {
    static $user_id;

    return [
        'user_id' => $faker->randomDigitNotNull,
        'name' => $faker->name,
        'short_name' => $faker->name,
        'capacity' => $faker->numberBetween($min = 0, $max = 850),
        'category' => $faker->name,
        'ship_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
