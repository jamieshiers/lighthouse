<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'ship_id' => $faker->numberBetween($min = 1, $max = 10),
        'password' => '$2y$10$UEhSapdRZ5oSGK748CRSKe/Wp/lVgm2jj0Y8.eq.FPVRsgacMlKuW', // password
        'remember_token' => Str::random(10),
    ];
});
