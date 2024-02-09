<?php

namespace Database\Factories;

use App\Models\Backend\BlogManagement\Blog;
use App\Models\Backend\BlogManagement\BlogCategory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(),
            'image' => $this->faker->text(),
            'content' => $this->faker->text(),
            'status' => $this->faker->word(),
            'view_count' => $this->faker->randomNumber(0),
            'blog_category_id' => BlogCategory::factory(),
        ];
    }
}
