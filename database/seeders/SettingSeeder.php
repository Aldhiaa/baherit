<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Site information
        DB::table('settings')->updateOrInsert(
            ['key' => 'site_name'],
            [
                'value' => json_encode([
                    'en' => 'Baher Technology',
                    'ar' => 'بحر التكنولوجيا'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('settings')->updateOrInsert(
            ['key' => 'site_email'],
            [
                'value' => json_encode([
                    'en' => 'info@baherit.com',
                    'ar' => 'info@baherit.com'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('settings')->updateOrInsert(
            ['key' => 'site_phone'],
            [
                'value' => json_encode([
                    'en' => '+967 777 777 777',
                    'ar' => '+967 777 777 777'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('settings')->updateOrInsert(
            ['key' => 'site_address'],
            [
                'value' => json_encode([
                    'en' => 'Sanaa, Yemen',
                    'ar' => 'صنعاء, اليمن'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        // Social media
        DB::table('settings')->updateOrInsert(
            ['key' => 'facebook'],
            [
                'value' => json_encode([
                    'en' => 'https://www.facebook.com/BaherITS/',
                    'ar' => 'https://www.facebook.com/BaherITS/'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('settings')->updateOrInsert(
            ['key' => 'twitter'],
            [
                'value' => json_encode([
                    'en' => 'https://twitter.com/baherits',
                    'ar' => 'https://twitter.com/baherits'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('settings')->updateOrInsert(
            ['key' => 'instagram'],
            [
                'value' => json_encode([
                    'en' => 'https://www.instagram.com/baherits/',
                    'ar' => 'https://www.instagram.com/baherits/'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('settings')->updateOrInsert(
            ['key' => 'linkedin'],
            [
                'value' => json_encode([
                    'en' => 'https://www.linkedin.com/company/baherits',
                    'ar' => 'https://www.linkedin.com/company/baherits'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('settings')->updateOrInsert(
            ['key' => 'youtube'],
            [
                'value' => json_encode([
                    'en' => 'https://www.youtube.com/@BaherITS',
                    'ar' => 'https://www.youtube.com/@BaherITS'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}