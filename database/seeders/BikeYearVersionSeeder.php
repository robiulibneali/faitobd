<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Backend\BikeManagement\BikeYearVersion;

class BikeYearVersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BikeYearVersion::factory()
            ->count(5)
            ->create();
    }
}
