<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $siteName = Setting::updateOrCreate(
            ['key' => 'site_name'],
            [
                'type' => 'text',
                'group' => 'general',
                'is_translatable' => false,
                'value' => 'Baher Technology',
            ]
        );

        $tagline = Setting::updateOrCreate(
            ['key' => 'tagline'],
            [
                'type' => 'text',
                'group' => 'general',
                'is_translatable' => true,
            ]
        );

        $tagline->translations()->updateOrCreate(
            ['locale' => 'en'],
            ['value' => 'Technology Solutions for Modern Businesses']
        );
        $tagline->translations()->updateOrCreate(
            ['locale' => 'ar'],
            ['value' => 'حلول تكنولوجية شاملة للمؤسسات الحديثة']
        );
    }
}
