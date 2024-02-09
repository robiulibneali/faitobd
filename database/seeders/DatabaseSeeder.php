<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@admin.com',
                'password' => \Hash::make('admin'),
            ]);

        $this->call(BikeBrandSeeder::class);
        $this->call(BikeEngineSizeSeeder::class);
        $this->call(BikeMotorTypeSeeder::class);
        $this->call(BikeYearVersionSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(BlogCategorySeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(HomePageSliderSeeder::class);
        $this->call(MarketVerdorSeeder::class);
        $this->call(MotorBikeSeeder::class);
        $this->call(PartsBrandCategorySeeder::class);
        $this->call(PartsParentBrandSeeder::class);
        $this->call(PartsProductSeeder::class);
        $this->call(SiteSettingSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(UserSeeder::class);
    }
}
