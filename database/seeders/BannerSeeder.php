<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    public function run(): void
    {
        $banner = Banner::updateOrCreate(
            ['page_context' => 'home-hero', 'display_order' => 1],
            [
                'image_path' => null,
                'button_url' => '/contact',
                'is_active' => true,
            ]
        );

        $banner->translations()->updateOrCreate(
            ['locale' => 'en'],
            [
                'heading' => 'Empowering Businesses Through Digital Transformation',
                'subheading' => 'Technology Solutions for Modern Businesses',
                'button_label' => 'Get Started',
            ]
        );

        $banner->translations()->updateOrCreate(
            ['locale' => 'ar'],
            [
                'heading' => 'تمكين الأعمال من خلال التحول الرقمي',
                'subheading' => 'حلول تكنولوجية شاملة للمؤسسات الحديثة',
                'button_label' => 'ابدأ الآن',
            ]
        );
    }
}
