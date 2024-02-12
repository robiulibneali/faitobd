<?php

namespace Database\Seeders;

use App\Models\Backend\BlogManagement\BlogCategory;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogCategory::factory()
            ->count(5)
            ->create();
    }
}
