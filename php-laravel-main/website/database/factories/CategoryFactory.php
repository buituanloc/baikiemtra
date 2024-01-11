<?php

namespace Database\Factories;

use App\Http\Controllers\admin\CategoryController;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $num_category = Category::count();
        $random_num = fake()->randomNumber(1);
        if ($num_category > 0 and $random_num < 3){
            return [
                'category_name' => fake()->name(),
                'category_slug' => fake()->slug(),
                'category_parent_id' => Category::all()->random()->category_id,
            ];
        }
        else {
            return [
                'category_name' => fake()->name(),
                'category_slug' => fake()->slug(),
                'category_parent_id' => 0,
            ];
        }

    }
}
