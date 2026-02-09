<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookImage>
 */
class BookImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => $this->faker->numberBetween(1,10),
            'image_url' => "https://picsum.photos/200/300?random=" . $this->faker->numberBetween(1,1000),
        ];
    }
}
