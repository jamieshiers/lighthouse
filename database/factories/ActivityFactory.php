<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Activity;
use Faker\Generator as Faker;

$factory->define(Activity::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'subhead' => $faker->word,
        'description' => $faker->text,
        'image' => $faker->word,
        'category' => $faker->word,
    ];
});
