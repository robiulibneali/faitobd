<?php

namespace Database\Seeders;

use App\Models\Backend\AdditionalFeatures\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::factory()
            ->count(5)
            ->create();
    }
}
