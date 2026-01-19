<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>$this->faker->name,
            'slug' => $this->faker->unique()->slug,
            'description' => $this->faker->text,
            'price' => $this->faker->numberBetween(100,5000),
            'aurthor_name' => $this->faker->name,
            'pages' => $this->faker->numberBetween(50,1000),
            'is_active' => $this->faker->boolean,
        ];
    }
}

