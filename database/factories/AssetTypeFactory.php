<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssetType>
 */
class AssetTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'asset_name' => $this->faker->firstname,
            'asset_type' => $this->faker->word,
            'asset_brand' => $this->faker->company,
            'asset_status' => $this->faker->randomElement(['Inactive','Active']),
        ];
    }
}
