<?php

namespace Database\Seeders;

use App\Models\Backend\AdditionalFeatures\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::factory()
            ->count(5)
            ->create();
    }
}
