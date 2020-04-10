<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Promotion;
use Faker\Generator as Faker;

$factory->define(Promotion::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'subhead' => $faker->word,
        'content' => $faker->paragraphs(3, true),
        'image' => $faker->word,
        'category' => $faker->word,
    ];
});
