<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->word,
            'price' => fake()->numberBetween(100, 9000),
            'type' => fake()->randomElement(array ('書籍','文具','日用品','衣服','3C','美食')),
            'description' => fake()->paragraph(3, true)
        ];
    }
}
