<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Http\Models\Category;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'title' => $this->faker->sentence,
            'image' => $this->faker->image('public/storage/images',400,300, true, true),
            'content' => $this->faker->paragraph,
            'category_id' => mt_rand(1,2),
            'tag_id' => mt_rand(1,2),
            'user_id' => 1,
            'slug' => $this->faker->slug,
        ];
    }
}
