<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\MenuItem;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $menu = Menu::updateOrCreate(
            ['name' => 'Main', 'location' => 'primary'],
            ['is_active' => true]
        );

        $items = [
            ['url' => '/', 'en' => 'Home', 'ar' => 'الرئيسية', 'order' => 1],
            ['url' => '/services', 'en' => 'Services', 'ar' => 'الخدمات', 'order' => 2],
            ['url' => '/about', 'en' => 'About', 'ar' => 'عنا', 'order' => 3],
            ['url' => '/faq', 'en' => 'FAQ', 'ar' => 'الأسئلة الشائعة', 'order' => 4],
            ['url' => '/contact', 'en' => 'Contact', 'ar' => 'اتصل بنا', 'order' => 5],
        ];

        foreach ($items as $i) {
            $item = MenuItem::updateOrCreate(
                ['menu_id' => $menu->id, 'url' => $i['url']],
                [
                    'type' => 'custom',
                    'target' => '_self',
                    'display_order' => $i['order'],
                    'is_active' => true,
                ]
            );

            $item->translations()->updateOrCreate(
                ['locale' => 'en'],
                ['label' => $i['en']]
            );

            $item->translations()->updateOrCreate(
                ['locale' => 'ar'],
                ['label' => $i['ar']]
            );
        }
    }
}
