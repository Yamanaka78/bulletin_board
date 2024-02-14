<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Board;
use App\Models\User;
use App\Models\Comment;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{

    private static int $sequence = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-1year');
        return [
            //
            'user_id' => self::$sequence++,
            'Board_id' => 1,
            'comment' => $this->faker->realText(50),
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
