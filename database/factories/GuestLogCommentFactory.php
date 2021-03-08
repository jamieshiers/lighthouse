<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\GuestLogComment;

class GuestLogCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GuestLogComment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'guest_log_id' => $this->faker->word,
            'comment_text' => $this->faker->text,
            'user_id' => $this->faker->word,
        ];
    }
}
