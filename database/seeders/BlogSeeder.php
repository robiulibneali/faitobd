<?php

namespace Database\Seeders;

use App\Models\Backend\BlogManagement\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::factory()
            ->count(5)
            ->create();
    }
}
