<?php

namespace Database\Factories;

use App\Models\GuestLog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GuestLogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GuestLog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'log_number' => $this->faker->word,
            'user_id' => $this->faker->numberBetween(-10000, 10000),
            'booking_reference' => $this->faker->word,
            'short_description' => $this->faker->text,
            'status' => $this->faker->randomElement(['open', 'closed']),
            'guest_emotion' => $this->faker->numberBetween(-10000, 10000),
            'opened_by' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
