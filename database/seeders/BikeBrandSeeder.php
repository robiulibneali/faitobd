<?php

namespace Database\Seeders;

use App\Models\Backend\BikeManagement\BikeBrand;
use Illuminate\Database\Seeder;

class BikeBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BikeBrand::factory()
            ->count(5)
            ->create();
    }
}
