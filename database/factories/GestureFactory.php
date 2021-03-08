<?php

namespace Database\Factories;

use App\Models\Gesture;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GestureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gesture::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'gesture_name' => $this->faker->word,
            'gesture_cost' => $this->faker->randomFloat(2, 0, 99999999999999.99),
            'gesture_email' => $this->faker->word,
            'booking_required' => $this->faker->boolean,
        ];
    }
}
