<?php

namespace Database\Factories;

use App\Models\Backend\AdditionalFeatures\Testimonial;
use App\Models\Backend\BikeManagement\MotorBike;
use App\Models\Backend\PartsManagement\PartsProduct;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Testimonial::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_name' => $this->faker->text(255),
            'user_image' => $this->faker->text(),
            'user_designation' => $this->faker->text(255),
            'message' => $this->faker->text(),
            'product_type' => 'parts',
            'status' => $this->faker->numberBetween(0, 127),
            'parent_model_id' => MotorBike::factory(),
            'parent_model_id' => PartsProduct::factory(),
        ];
    }
}
