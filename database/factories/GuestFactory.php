<?php

namespace Database\Factories;

use App\Models\Guest;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GuestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Guest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'booking_reference' => $this->faker->word,
            'cabin_number' => $this->faker->word,
            'berth' => $this->faker->numberBetween(-10000, 10000),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'birthday' => $this->faker->date(),
        ];
    }
}
