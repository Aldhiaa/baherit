<?php

namespace Database\Seeders;

use App\Models\TechnologyCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => ['en' => 'Frontend', 'ar' => 'الواجهة الأمامية'],
                'description' => ['en' => 'Technologies used for building user interfaces and client-side applications.', 'ar' => 'التقنيات المستخدمة لبناء واجهات المستخدم وتطبيقات جانب العميل.'],
                'icon_svg_path' => 'M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V9a1 1 0 00-1-1h-1v-1z',
                'color_class' => 'primary',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => ['en' => 'Backend', 'ar' => 'الخادم الخلفي'],
                'description' => ['en' => 'Server-side technologies and frameworks for building robust APIs and business logic.', 'ar' => 'تقنيات وأطر العمل الجانبية للخادم لبناء واجهات برمجة التطبيقات والمنطق التجاري القوي.'],
                'icon_svg_path' => 'M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h3.5a3.5 3.5 0 100-7H11V3.414l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 3.414V6H5.5A3.5 3.5 0 002 9.5z',
                'color_class' => 'accent',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => ['en' => 'Database', 'ar' => 'قاعدة البيانات'],
                'description' => ['en' => 'Database systems and storage solutions for managing data efficiently.', 'ar' => 'أنظمة قواعد البيانات وحلول التخزين لإدارة البيانات بكفاءة.'],
                'icon_svg_path' => 'M3 4a1 1 0 000 2v9a2 2 0 002 2h1a2 2 0 002-2V6a1 1 0 100-2H3zm3 11V6h1v9a1 1 0 01-1 1H5a1 1 0 01-1-1zm5-10a1 1 0 011-1h3a1 1 0 110 2v8a2 2 0 01-2 2h-1a2 2 0 01-2-2V5z',
                'color_class' => 'success',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => ['en' => 'Cloud', 'ar' => 'الحوسبة السحابية'],
                'description' => ['en' => 'Cloud platforms and services for scalable and reliable infrastructure.', 'ar' => 'المنصات والخدمات السحابية للبنية التحتية القابلة للتوسع والموثوقة.'],
                'icon_svg_path' => 'M5.5 16a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 16h-8z',
                'color_class' => 'warning',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => ['en' => 'Mobile', 'ar' => 'الجوال'],
                'description' => ['en' => 'Mobile development frameworks and tools for cross-platform applications.', 'ar' => 'أطر عمل وأدوات تطوير الجوال لتطبيقات متعددة المنصات.'],
                'icon_svg_path' => 'M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z',
                'color_class' => 'accent',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'name' => ['en' => 'Emerging', 'ar' => 'الناشئة'],
                'description' => ['en' => 'Cutting-edge technologies and innovations shaping the future.', 'ar' => 'التقنيات والابتكارات المتطورة التي تشكل المستقبل.'],
                'icon_svg_path' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
                'color_class' => 'primary',
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($categories as $categoryData) {
            TechnologyCategory::updateOrCreate(
                ['name' => $categoryData['name']],
                $categoryData
            );
        }
    }
}
