<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Backend\PartsManagement\PartsParentBrand;

class PartsParentBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PartsParentBrand::factory()
            ->count(5)
            ->create();
    }
}
