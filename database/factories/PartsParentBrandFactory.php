<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Backend\PartsManagement\PartsParentBrand;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartsParentBrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PartsParentBrand::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'logo' => $this->faker->text(),
            'description' => $this->faker->sentence(15),
            'status' => $this->faker->numberBetween(0, 127),
        ];
    }
}
