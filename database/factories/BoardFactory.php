<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Board;
use App\Models\User;
use App\Models\Comment;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Board>
 */
class BoardFactory extends Factory
{
    protected $model = Board::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private static int $sequence = 1;
    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-1year');

        return [
            //
            'user_id' =>  self::$sequence++,
            'title' => $this->faker->realText(10),
            'post' => $this->faker->realText(100),
            'created_at' => $date,
            'updated_at' => $date
        ];
    }
}
