<?php

namespace Database\Factories;

use App\Models\Backend\PartsManagement\PartsBrandCategory;
use Illuminate\Support\Str;
use App\Models\Backend\PartsManagement\PartsProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartsProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PartsProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(),
            'sub_title' => $this->faker->text(),
            'short_description' => $this->faker->text(),
            'long_description' => $this->faker->text(),
            'features' => $this->faker->text(),
            'view_count' => $this->faker->randomNumber(0),
            'status' => $this->faker->numberBetween(0, 127),
            'sku' => $this->faker->text(255),
            'main_image' => $this->faker->text(),
            'sub_images' => $this->faker->text(),
            'parts_brand_category_id' => PartsBrandCategory::factory(),
        ];
    }
}
