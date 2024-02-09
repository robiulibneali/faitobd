<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Backend\PartsManagement\PartsBrandCategory;

class PartsBrandCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PartsBrandCategory::factory()
            ->count(5)
            ->create();
    }
}
