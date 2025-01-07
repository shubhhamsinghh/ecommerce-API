<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => function(){
                return Product::all()->random();
            },
            'customer' => $this->faker->name,
            'review' => $this->faker->realText($maxNBChars = 100),
            'star' => $this->faker->numberBetween(0,5)
        ];
    }
}
