<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barcode>
 */
class BarcodeFactory extends Factory
{
    public function definition(): array
    {
            return [
                'name' => fake()->unique()->numberBetween(100000000,999999999)
            ];
    }
}
