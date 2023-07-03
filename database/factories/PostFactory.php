<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class PostFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => 1,
            'category_id'=> rand(1, 5),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(15)
        ];
    }
}
