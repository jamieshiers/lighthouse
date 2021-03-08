<?php

namespace Database\Factories;

use App\Models\GuestLogComment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
