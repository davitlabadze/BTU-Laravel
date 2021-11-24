<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->userName(),
            'category' => $this->faker->word(),
            'title'    => $this->faker->sentence(),
            'slug'     => $this->faker->slug(),
            'body'     => $this->faker->text(),
        ];
    }
}
