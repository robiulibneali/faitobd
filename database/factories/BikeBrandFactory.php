<?php

namespace Database\Factories;

use App\Models\Backend\BikeManagement\BikeBrand;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BikeBrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BikeBrand::class;

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
            'description' => $this->faker->text(),
            'status' => $this->faker->numberBetween(0, 127),
        ];
    }
}
