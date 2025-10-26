<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServicePage;

class ServicePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $servicePage = ServicePage::firstOrNew(['page_name' => 'services']);
        
        $servicePage->fill([
            'is_active' => true,
            
            // Hero section
            'hero_title' => [
                'en' => 'Our Services',
                'ar' => 'خدماتنا'
            ],
            'hero_highlight' => [
                'en' => 'Solutions',
                'ar' => 'الحلول'
            ],
            'hero_description' => [
                'en' => 'We provide cutting-edge digital solutions to help your business thrive in the modern world. Our expert team delivers innovative services tailored to your unique needs.',
                'ar' => 'نوفر حلولاً رقمية متقدمة لمساعدة عملك على الازدهار في العالم الحديث. يوفر فريق الخبراء لدينا خدمات مبتكرة مصممة خصيصاً لاحتياجاتك الفريدة.'
            ],
            'hero_button_primary' => [
                'en' => 'Get a Quote',
                'ar' => 'احصل على عرض سعر'
            ],
            'hero_button_secondary' => [
                'en' => 'View Case Studies',
                'ar' => 'عرض دراسات الحالة'
            ],
            
            // Find section
            'find_title' => [
                'en' => 'Find the Perfect Solution',
                'ar' => 'ابحث عن الحل المثالي'
            ],
            'find_description' => [
                'en' => 'Browse our comprehensive range of services to find exactly what your business needs.',
                'ar' => 'تصفح مجموعة خدماتنا الشاملة للعثور على ما تحتاجه عملك بالضبط.'
            ],
            'filter_all' => [
                'en' => 'All Services',
                'ar' => 'جميع الخدمات'
            ],
            'filter_development' => [
                'en' => 'Development',
                'ar' => 'التطوير'
            ],
            'filter_cloud' => [
                'en' => 'Cloud Services',
                'ar' => 'خدمات السحابة'
            ],
            'filter_consulting' => [
                'en' => 'Consulting',
                'ar' => 'الاستشارات'
            ],
            'reset' => [
                'en' => 'Reset Filters',
                'ar' => 'إعادة تعيين الفلاتر'
            ],
            
            // Technology section
            'technology_title' => [
                'en' => 'Technologies We Work With',
                'ar' => 'التقنيات التي نعمل بها'
            ],
            'technology_description' => [
                'en' => 'Our team is proficient in a wide range of modern technologies to deliver the best solutions for your business.',
                'ar' => 'فريقنا ماهر في مجموعة واسعة من التقنيات الحديثة لتقديم أفضل الحلول لعملك.'
            ],
            'frontend' => [
                'en' => 'Frontend',
                'ar' => 'الواجهة الأمامية'
            ],
            'backend' => [
                'en' => 'Backend',
                'ar' => 'الواجهة الخلفية'
            ],
            'database' => [
                'en' => 'Database',
                'ar' => 'قاعدة البيانات'
            ],
            'cloud' => [
                'en' => 'Cloud',
                'ar' => 'السحابة'
            ],
            'learn_more' => [
                'en' => 'Learn More',
                'ar' => 'معرفة المزيد'
            ],
            
            // Process section
            'process_title' => [
                'en' => 'Our Development Process',
                'ar' => 'عملية التطوير لدينا'
            ],
            'process_description' => [
                'en' => 'We follow a proven methodology to ensure the success of every project we undertake.',
                'ar' => 'نتبع منهجية مثبتة لضمان نجاح كل مشروع نقوم به.'
            ],
            'process_discovery' => [
                'en' => 'Discovery & Planning',
                'ar' => 'الاكتشاف والتخطيط'
            ],
            'process_discovery_desc' => [
                'en' => 'We work closely with you to understand your requirements and define project goals.',
                'ar' => 'نعمل معك عن كثب لفهم متطلباتك وتحديد أهداف المشروع.'
            ],
            'process_design' => [
                'en' => 'Design & Prototyping',
                'ar' => 'التصميم والنماذج الأولية'
            ],
            'process_design_desc' => [
                'en' => 'Our designers create intuitive interfaces and user experiences that align with your brand.',
                'ar' => 'يقوم مصممونا بإنشاء واجهات وتجارب مستخدم بديهية تتماشى مع علامتك التجارية.'
            ],
            'process_development' => [
                'en' => 'Development & Testing',
                'ar' => 'التطوير والاختبار'
            ],
            'process_development_desc' => [
                'en' => 'We build robust, scalable solutions with rigorous testing to ensure quality.',
                'ar' => 'نقوم ببناء حلول قوية وقابلة للتوسع مع اختبارات صارمة لضمان الجودة.'
            ],
            'process_deployment' => [
                'en' => 'Deployment & Support',
                'ar' => 'النشر والدعم'
            ],
            'process_deployment_desc' => [
                'en' => 'We deploy your solution and provide ongoing support to ensure continued success.',
                'ar' => 'نقوم بنشر الحل الخاص بك ونقدم الدعم المستمر لضمان استمرار النجاح.'
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
                'en' => 'Get in Touch',
                'ar' => 'ابق على تواصل'
            ],
            'cta_button_secondary' => [
                'en' => 'View Case Studies',
                'ar' => 'عرض دراسات الحالة'
            ],
        ]);
        
        $servicePage->save();
    }
}