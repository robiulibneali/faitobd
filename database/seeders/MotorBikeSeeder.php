<?php

namespace Database\Seeders;

use App\Models\Backend\BikeManagement\MotorBike;
use Illuminate\Database\Seeder;

class MotorBikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MotorBike::factory()
            ->count(5)
            ->create();
    }
}
