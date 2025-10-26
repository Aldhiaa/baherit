<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CaseStudyPage;

class CaseStudyPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $caseStudyPage = CaseStudyPage::firstOrNew(['page_name' => 'case-studies']);

        $caseStudyPage->fill([
            'is_active' => true,

            // Hero section
            'hero_title' => [
                'en' => 'Case Studies',
                'ar' => 'دراسات الحالة'
            ],
            'hero_description' => [
                'en' => 'Explore our success stories and see how we\'ve helped businesses transform and grow through innovative digital solutions.',
                'ar' => 'استكشف قصص نجاحنا وشاهد كيف ساعدنا الشركات على التحول والنمو من خلال حلول رقمية مبتكرة.'
            ],
            'hero_button_primary' => [
                'en' => 'Get in Touch',
                'ar' => 'ابق على تواصل'
            ],
            'hero_button_secondary' => [
                'en' => 'View Case Studies',
                'ar' => 'عرض دراسات الحالة'
            ],

            // Search and filter section
            'search_placeholder' => [
                'en' => 'Search case studies...',
                'ar' => 'البحث في دراسات الحالة...'
            ],
            'filter_all' => [
                'en' => 'All Industries',
                'ar' => 'جميع الصناعات'
            ],
            'filter_healthcare' => [
                'en' => 'Healthcare',
                'ar' => 'الرعاية الصحية'
            ],
            'filter_finance' => [
                'en' => 'Finance',
                'ar' => 'المالية'
            ],
            'filter_manufacturing' => [
                'en' => 'Manufacturing',
                'ar' => 'التصنيع'
            ],
            'filter_retail' => [
                'en' => 'Retail',
                'ar' => 'التجزئة'
            ],
            'reset' => [
                'en' => 'Reset Filters',
                'ar' => 'إعادة تعيين الفلاتر'
            ],

            // Featured section
            'featured_title' => [
                'en' => 'Featured Case Study',
                'ar' => 'دراسة الحالة المميزة'
            ],
            'featured_subtitle' => [
                'en' => 'Discover how we transformed challenges into opportunities for our clients.',
                'ar' => 'اكتشف كيف حولنا التحديات إلى فرص لعملائنا.'
            ],
            'completed' => [
                'en' => 'Completed',
                'ar' => 'مكتمل'
            ],
            'view_full_case_study' => [
                'en' => 'View Full Case Study',
                'ar' => 'عرض دراسة الحالة الكاملة'
            ],
            'start_similar_project' => [
                'en' => 'Start Similar Project',
                'ar' => 'بدء مشروع مشابه'
            ],

            // Grid section
            'grid_title' => [
                'en' => 'More Success Stories',
                'ar' => ' المزيد من قصص النجاح'
            ],
            'grid_subtitle' => [
                'en' => 'Browse our portfolio of successful projects across various industries.',
                'ar' => 'تصفح محفظتنا من المشاريع الناجحة في مختلف الصناعات.'
            ],
            'view_case_study' => [
                'en' => 'View Case Study',
                'ar' => 'عرض دراسة الحالة'
            ],
            'load_more' => [
                'en' => 'Load More',
                'ar' => 'تحميل المزيد'
            ],

            // Metrics section
            'metrics_title' => [
                'en' => 'Our Impact in Numbers',
                'ar' => 'تأثيرنا بالأرقام'
            ],
            'metrics_subtitle' => [
                'en' => 'Key metrics that demonstrate our commitment to excellence and client success.',
                'ar' => 'المقاييس الرئيسية التي تُظهر التزامنا بالتميز ونجاح العملاء.'
            ],
            'projects_delivered' => [
                'en' => 'Projects Delivered',
                'ar' => 'المشاريع المسلمة'
            ],
            'client_satisfaction' => [
                'en' => 'Client Satisfaction',
                'ar' => 'رضا العملاء'
            ],
            'avg_roi' => [
                'en' => 'Average ROI',
                'ar' => 'متوسط العائد على الاستثمار'
            ],
            'years_experience' => [
                'en' => 'Years Experience',
                'ar' => 'سنوات الخبرة'
            ],

            // CTA section
            'cta_title' => [
                'en' => 'Ready to Transform Your Business?',
                'ar' => 'هل أنت مستعد لتحويل عملك؟'
            ],
            'cta_description' => [
                'en' => 'Contact us today to discuss how our services can help you achieve your business goals.',
                'ar' => 'اتصل بنا اليوم لمناقشة كيف يمكن لخدماتنا مساعدتك في تحقيق أهداف عملك.'
            ],
            'cta_button_primary' => [
                'en' => 'Get a Quote',
                'ar' => 'احصل على عرض سعر'
            ],
            'cta_button_secondary' => [
                'en' => 'View Services',
                'ar' => 'عرض الخدمات'
            ],
        ]);

        $caseStudyPage->save();
    }
}
