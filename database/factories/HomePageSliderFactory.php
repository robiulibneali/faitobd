<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Backend\AdditionalFeatures\HomePageSlider;
use Illuminate\Database\Eloquent\Factories\Factory;

class HomePageSliderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HomePageSlider::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slider_file_type' => 'image',
            'file' => $this->faker->text(),
            'file_url' => $this->faker->text(),
            'file_type' => $this->faker->text(255),
            'status' => $this->faker->numberBetween(0, 127),
        ];
    }
}
