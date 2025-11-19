<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // General Settings
            [
                'key' => 'site_name',
                'value' => 'Baherit',
                'type' => 'text',
                'group' => 'general',
                'is_translatable' => false,
            ],
            [
                'key' => 'site_email',
                'value' => 'info@baherit.com',
                'type' => 'text',
                'group' => 'general',
                'is_translatable' => false,
            ],
            [
                'key' => 'site_phone',
                'value' => '+966 50 123 4567',
                'type' => 'text',
                'group' => 'general',
                'is_translatable' => false,
            ],
            [
                'key' => 'site_address',
                'value' => 'Riyadh, Saudi Arabia',
                'type' => 'text',
                'group' => 'general',
                'is_translatable' => false,
            ],
            [
                'key' => 'site_description',
                'value' => 'Baherit - Leading technology solutions provider specializing in innovative software development, web applications, and digital transformation services.',
                'type' => 'textarea',
                'group' => 'general',
                'is_translatable' => false,
            ],

            // Branding Settings
            [
                'key' => 'logo',
                'value' => 'images/settings/logo.png',
                'type' => 'image',
                'group' => 'branding',
                'is_translatable' => false,
            ],
            [
                'key' => 'logo_dark',
                'value' => 'images/settings/logo.png',
                'type' => 'image',
                'group' => 'branding',
                'is_translatable' => false,
            ],

            // SEO Settings
            [
                'key' => 'meta_title',
                'value' => 'Baherit - Technology Solutions & Software Development',
                'type' => 'text',
                'group' => 'seo',
                'is_translatable' => false,
            ],
            [
                'key' => 'meta_description',
                'value' => 'Professional technology solutions, software development, and digital services for modern businesses in Saudi Arabia',
                'type' => 'textarea',
                'group' => 'seo',
                'is_translatable' => false,
            ],
            [
                'key' => 'meta_keywords',
                'value' => 'baherit, technology solutions, software development, web development, digital transformation, saudi arabia',
                'type' => 'textarea',
                'group' => 'seo',
                'is_translatable' => false,
            ],

            // Social Media Settings (empty by default)
            [
                'key' => 'facebook_url',
                'value' => '',
                'type' => 'url',
                'group' => 'social',
                'is_translatable' => false,
            ],
            [
                'key' => 'twitter_url',
                'value' => '',
                'type' => 'url',
                'group' => 'social',
                'is_translatable' => false,
            ],
            [
                'key' => 'instagram_url',
                'value' => '',
                'type' => 'url',
                'group' => 'social',
                'is_translatable' => false,
            ],
            [
                'key' => 'linkedin_url',
                'value' => '',
                'type' => 'url',
                'group' => 'social',
                'is_translatable' => false,
            ],
            [
                'key' => 'youtube_url',
                'value' => '',
                'type' => 'url',
                'group' => 'social',
                'is_translatable' => false,
            ],
            [
                'key' => 'github_url',
                'value' => '',
                'type' => 'url',
                'group' => 'social',
                'is_translatable' => false,
            ],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }

        $this->command->info('Settings seeded successfully with Baherit defaults!');
    }
}
