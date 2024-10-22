<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(30),
            'desc' => $this->faker->text(60),
            'checked' => $this->faker->boolean(),
            'date' => $this->faker->dateTime(),
            'category_id' => Category::all()->random(),
            'user_id' => User::all()->random()
        ];
    }
}
