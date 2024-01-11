<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seo>
 */
class SeoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'seo_keywords' =>fake()->text(),
            'seo_description'=>fake()->text(),
            'seo_script'=>fake()->text(),
        ];
    }
}
