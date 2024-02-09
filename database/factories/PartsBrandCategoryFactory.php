<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Backend\PartsManagement\PartsBrandCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartsBrandCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PartsBrandCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'image' => $this->faker->text(),
            'description' => $this->faker->text(),
            'status' => $this->faker->numberBetween(0, 127),
            'parts_parent_brand_id' => \App\Models\PartsParentBrand::factory(),
            'parts_brand_category_id' => function () {
                return \App\Models\PartsBrandCategory::factory()->create([
                    'parts_brand_category_id' => null,
                ])->id;
            },
        ];
    }
}
