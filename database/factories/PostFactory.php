<?php

namespace Database\Factories;

use App\Models\Post;
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
            'category' => $this->faker->randomElement($array = ['mobile']),
            'name'=> $this->faker->randomElement($array = ['sony','iphone6','iphone7','samsung galaxy','iphone12','iphone11']),
            'price'=>$this->faker->numberBetween($min = 500, $max = 5000),
        ];
    }
}
