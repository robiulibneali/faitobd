<?php

namespace Database\Factories;

use App\Models\Backend\BikeManagement\MotorBike;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class MotorBikeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MotorBike::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model_name' => $this->faker->text(255),
            'size' => $this->faker->text(255),
            'variant' => $this->faker->text(255),
            'sku' => $this->faker->text(255),
            'slug' => $this->faker->text(),
            'status' => $this->faker->numberBetween(0, 127),
            'bike_brand_id' => \App\Models\BikeBrand::factory(),
            'bike_motor_type_id' => \App\Models\BikeMotorType::factory(),
            'bike_engine_size_id' => \App\Models\BikeEngineSize::factory(),
            'bike_year_version_id' => \App\Models\BikeYearVersion::factory(),
        ];
    }
}
