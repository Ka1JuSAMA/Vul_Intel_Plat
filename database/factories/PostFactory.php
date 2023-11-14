<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_name' => $this->faker->word,
            'post_type' => $this->faker->paragraph,
            'photo' => $this->faker->randomElement(['https://miro.medium.com/v2/resize:fit:720/format:webp/0*A4P6CUpHaQRmF3qb.png', 
            'https://dummyimage.com/250/ffffff/000000'])
        ];
    }
}
