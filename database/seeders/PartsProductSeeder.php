<?php

namespace Database\Seeders;

use App\Models\Backend\PartsManagement\PartsProduct;
use Illuminate\Database\Seeder;

class PartsProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PartsProduct::factory()
            ->count(5)
            ->create();
    }
}
