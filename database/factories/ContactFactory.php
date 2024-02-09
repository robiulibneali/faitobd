<?php

namespace Database\Factories;

use App\Models\Frontend\Contact;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'contact_type' => 'regular',
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'mobile' => $this->faker->phoneNumber(),
            'message' => $this->faker->text(),
            'workshop_info' => $this->faker->text(),
            'workshop_outside_image' => $this->faker->text(255),
            'workshop_inside_image' => $this->faker->text(255),
            'workshop_selfie_image' => $this->faker->text(255),
            'status' => $this->faker->numberBetween(0, 127),
            'bike_motor_type_id' => \App\Models\BikeMotorType::factory(),
        ];
    }
}
