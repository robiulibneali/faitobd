<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Backend\BikeManagement\BikeYearVersion;
use Illuminate\Database\Eloquent\Factories\Factory;

class BikeYearVersionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BikeYearVersion::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'info' => $this->faker->text(),
            'status' => $this->faker->numberBetween(0, 127),
        ];
    }
}
