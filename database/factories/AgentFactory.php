<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Agent;
use Faker\Generator as Faker;

$factory->define(Agent::class, function (Faker $faker) {
    return [
        'port_id' => factory(\App\Port::class),
        'name' => $faker->name,
        'business_name' => $faker->word,
        'primary_contact_number' => $faker->word,
        'secondary_contact_number' => $faker->word,
        'email' => $faker->safeEmail,
        'address' => $faker->word,
    ];
});
