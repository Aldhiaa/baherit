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

        // Company description
        DB::table('settings')->updateOrInsert(
            ['key' => 'ouT_baher_technology'],
            [
                'value' => json_encode([
                    'en' => 'Tech baher is a Yemeni company specialized in providing comprehensive technological and digital solutions. It aims to empower businesses and organizations to achieve digital transformation and excel in an ever-changing business environment. We rely on a professional team passionate about technology to deliver innovative, high-quality services at competitive prices that meet customer expectations.',
                    'ar' => 'بحر التكنولوجيا هي شركة يمنية متخصصة في تقديم حلول تقنية ورقمية متكاملة، تهدف إلى تمكين الشركات والمؤسسات من تحقيق التحول الرقمي والتميز في بيئة الأعمال المتغيرة. نعتمد على فريق عمل محترف وشغوف بالتقنية، لتقديم خدمات مبتكرة بجودة عالية وأسعار تنافسية تلبي تطلعات العملاء.'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        // Banner title
        DB::table('settings')->updateOrInsert(
            ['key' => 'banner_title'],
            [
                'value' => json_encode([
                    'en' => 'Baher Technology',
                    'ar' => 'بحر التكنولوجيا'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        // Browse project button text
        DB::table('settings')->updateOrInsert(
            ['key' => 'browse_project'],
            [
                'value' => json_encode([
                    'en' => 'projects',
                    'ar' => 'تصفح مشاريعنا '
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
