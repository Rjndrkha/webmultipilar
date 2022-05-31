<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->image('public/storage/images',400,300, true, true),
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'description' => $this->faker->paragraph,
        ];
    }
}
