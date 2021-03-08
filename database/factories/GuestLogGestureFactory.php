<?php

namespace Database\Factories;

use App\Models\GuestLog_Gesture;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GuestLogGestureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GuestLogGesture::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'guest_log_id' => $this->faker->word,
            'gesture_id' => $this->faker->word,
            'gesture_notes' => $this->faker->text,
        ];
    }
}
