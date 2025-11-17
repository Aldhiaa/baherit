<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        $about = Page::updateOrCreate(
            ['slug' => 'about'],
            [
                'seo_title' => 'About Us',
                'seo_description' => null,
                'status' => 'published',
            ]
        );

        $about->translations()->updateOrCreate(
            ['locale' => 'en'],
            [
                'title' => 'About Us',
                'content' => "Baher Technology is a Yemeni company specialized in providing comprehensive digital and technological solutions. Our mission is to empower businesses and organizations to achieve digital transformation and excel in today's dynamic business landscape.",
            ]
        );

        $about->translations()->updateOrCreate(
            ['locale' => 'ar'],
            [
                'title' => 'عنا',
                'content' => 'بحر التكنولوجيا هي شركة يمنية متخصصة في تقديم حلول تقنية ورقمية متكاملة، تهدف إلى تمكين الشركات والمؤسسات من تحقيق التحول الرقمي والتميز في عالم الأعمال المتغير.',
            ]
        );
    }
}
