<?php

namespace Database\Factories;

use App\Models\Backend\AdditionalFeatures\SiteSetting;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiteSettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SiteSetting::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'title' => $this->faker->sentence(10),
            'description' => $this->faker->sentence(15),
            'menu_logo' => $this->faker->text(),
            'favicon' => $this->faker->text(),
            'footer_logo' => $this->faker->text(),
            'default_seo_header' => $this->faker->text(),
            'default_seo_footer' => $this->faker->text(),
            'fb_link' => $this->faker->text(),
            'tiktok_link' => $this->faker->text(),
            'insta_link' => $this->faker->text(),
            'youtube_link' => $this->faker->text(),
            'helpline_number' => $this->faker->text(255),
        ];
    }
}
