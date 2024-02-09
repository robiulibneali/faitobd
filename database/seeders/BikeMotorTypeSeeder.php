<?php

namespace Database\Seeders;

use App\Models\Backend\BikeManagement\BikeMotorType;
use Illuminate\Database\Seeder;

class BikeMotorTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BikeMotorType::factory()
            ->count(5)
            ->create();
    }
}
