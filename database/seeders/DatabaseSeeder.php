<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LanguageSeeder::class,
            SettingSeeder::class,
            BannerSeeder::class,
            PageSeeder::class,
            ServiceSeeder::class,
            FaqSeeder::class,
            CounterSeeder::class,
            MenuSeeder::class,
            ProjectSeeder::class,
            TestimonialSeeder::class,
            TeamMemberSeeder::class,
        ]);
    }
}
