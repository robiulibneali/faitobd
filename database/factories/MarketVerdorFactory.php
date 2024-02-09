<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Backend\AdditionalFeatures\MarketVerdor;
use Illuminate\Database\Eloquent\Factories\Factory;

class MarketVerdorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MarketVerdor::class;

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
            'status' => $this->faker->numberBetween(0, 127),
        ];
    }
}
