<?php

namespace Database\Seeders;

use App\Models\Backend\AdditionalFeatures\MarketVerdor;
use Illuminate\Database\Seeder;

class MarketVerdorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MarketVerdor::factory()
            ->count(5)
            ->create();
    }
}
