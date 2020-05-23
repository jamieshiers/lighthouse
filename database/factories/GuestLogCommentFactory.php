<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\GuestLogComment;
use Faker\Generator as Faker;

$factory->define(GuestLogComment::class, function (Faker $faker) {
    return [
        'GuestLog_id' => $faker->randomNumber(),
        'comment_text' => $faker->text,
        'user_id' => $faker->randomNumber(),
    ];
});
