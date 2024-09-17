<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = ucfirst($this->faker->unique()->word()); // Capitalize the first letter
        $slug = Str::slug($name); // Generate a URL-friendly slug

        return [
            'name' => $name,
            'status' => $this->faker->boolean(), // Generate a boolean value
            'slug' => $slug,
        ];
    }
}