<?php

namespace Database\Seeders;

use App\Models\Backend\BikeManagement\BikeEngineSize;
use Illuminate\Database\Seeder;

class BikeEngineSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BikeEngineSize::factory()
            ->count(5)
            ->create();
    }
}
