<?php

namespace Database\Factories;

use App\Models\Categorys;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'desc' => fake()->sentence(),
            'img' => fake()->numberBetween(20,46),
            'price' => fake()->numberBetween(100,600),
            'discount' => fake()->numberBetween(3,10),
            'quantity' => fake()->numberBetween(1,20),
            'offer' => fake()->sentence(),
            'categori_id' => function () {
                    return Categorys::all()->random();
                }

                //
            //
        ];
    }
}