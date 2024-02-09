<?php

namespace Database\Seeders;

use App\Models\Backend\AdditionalFeatures\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::factory()
            ->count(5)
            ->create();
    }
}
