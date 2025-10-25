<?php

namespace Database\Seeders;

use App\Models\AboutSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            [
                'section_name' => 'hero',
                'title' => json_encode([
                    'en' => 'About Our Company',
                    'ar' => 'عن شركتنا'
                ]),
                'description' => json_encode([
                    'en' => 'We are a leading technology company dedicated to delivering innovative solutions that drive business growth and digital transformation.',
                    'ar' => 'نحن شركة تكنولوجيا رائدة مكرسة لتقديم حلول مبتكرة تسهم في نمو الأعمال والتحول الرقمي.'
                ]),
                'content' => json_encode([
                    'hero_button_primary' => 'Get in Touch',
                    'hero_button_secondary' => 'View Case Studies'
                ]),
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'section_name' => 'company_story',
                'title' => json_encode([
                    'en' => 'Our Company Story',
                    'ar' => 'قصة شركتنا'
                ]),
                'description' => json_encode([
                    'en' => 'Founded with a vision to revolutionize the technology landscape, our journey has been marked by innovation, excellence, and unwavering commitment to our clients.',
                    'ar' => 'تأسست الشركة برؤية لإحداث ثورة في مشهد التكنولوجيا، وقد تميزت رحلتنا بالابتكار والتميز والالتزام الثابت تجاه عملائنا.'
                ]),
                'content' => json_encode([
                    'story_description_1' => 'Since our inception in 2017, we have been at the forefront of technological innovation, helping businesses transform their digital presence and achieve unprecedented growth.',
                    'story_description_2' => 'Our team of experts brings together decades of experience across various industries, ensuring that we deliver solutions that are not just technologically advanced but also strategically aligned with business objectives.',
                    'story_description_3' => 'Today, we serve clients across the globe, from startups to Fortune 500 companies, helping them navigate the complexities of the digital world with confidence and precision.',
                    'projects_delivered' => 'Projects Delivered',
                    'client_satisfaction' => 'Client Satisfaction',
                    'years_of_excellence' => 'Years of Excellence'
                ]),
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'section_name' => 'foundation',
                'title' => json_encode([
                    'en' => 'Our Foundation',
                    'ar' => 'أساسنا'
                ]),
                'description' => json_encode([
                    'en' => 'Our core principles guide everything we do, ensuring we deliver exceptional value to our clients and partners.',
                    'ar' => 'تُوجه مبادئنا الأساسية كل ما نقوم به، مما يضمن لنا تقديم قيمة استثنائية لعملائنا وشركائنا.'
                ]),
                'content' => json_encode([
                    'mission_title' => 'Mission',
                    'mission_description' => 'To empower businesses with cutting-edge technology solutions that drive innovation, efficiency, and sustainable growth.',
                    'vision_title' => 'Vision',
                    'vision_description' => 'To be the global leader in digital transformation, recognized for our expertise, integrity, and commitment to excellence.',
                    'values_title' => 'Values',
                    'values_description' => 'Innovation, Integrity, Excellence, Collaboration, and Customer-Centricity form the cornerstone of our organizational culture.'
                ]),
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'section_name' => 'leadership',
                'title' => json_encode([
                    'en' => 'Leadership Team',
                    'ar' => 'فريق القيادة'
                ]),
                'description' => json_encode([
                    'en' => 'Meet the visionary leaders who drive our success and shape our future.',
                    'ar' => 'تعرف على القادة الرؤساء الذين يقودون نجاحنا ويصنعون مستقبلنا.'
                ]),
                'content' => json_encode([]),
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'section_name' => 'culture',
                'title' => json_encode([
                    'en' => 'Company Culture',
                    'ar' => 'ثقافة الشركة'
                ]),
                'description' => json_encode([
                    'en' => 'Our culture is built on innovation, collaboration, and a passion for excellence.',
                    'ar' => 'تم بناء ثقافتنا على الابتكار والتعاون والشغف للتميز.'
                ]),
                'content' => json_encode([
                    'culture_subtitle' => 'Building the Future Together',
                    'technical_excellence' => 'Technical Excellence',
                    'technical_excellence_desc' => 'We maintain the highest standards of technical proficiency and stay ahead of industry trends to deliver cutting-edge solutions.',
                    'continuous_learning' => 'Continuous Learning',
                    'continuous_learning_desc' => 'Our team embraces a culture of continuous learning, regularly updating skills and knowledge to provide the best service.',
                    'collaborative_environment' => 'Collaborative Environment',
                    'collaborative_environment_desc' => 'We foster an environment where ideas flow freely, and teamwork leads to innovative solutions and shared success.',
                    'work_life_balance' => 'Work-Life Balance',
                    'work_life_balance_desc' => 'We believe in maintaining a healthy work-life balance, ensuring our team members are both productive and fulfilled.',
                    'recognition_title' => 'Recognition & Certifications',
                    'recognition_description' => 'Our commitment to excellence has been recognized by industry leaders and partners.',
                    'culture_title' => 'Company Culture',
                    'culture_description' => 'Our culture is built on innovation, collaboration, and a passion for excellence.'
                ]),
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'section_name' => 'leadership',
                'title' => json_encode([
                    'en' => 'Leadership Team',
                    'ar' => 'فريق القيادة'
                ]),
                'description' => json_encode([
                    'en' => 'Meet the visionary leaders who drive our success and shape our future.',
                    'ar' => 'تعرف على القادة الرؤساء الذين يقودون نجاحنا ويصنعون مستقبلنا.'
                ]),
                'content' => json_encode([]),
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'section_name' => 'team_expertise',
                'title' => json_encode([
                    'en' => 'Team Expertise',
                    'ar' => 'خبرة الفريق'
                ]),
                'description' => json_encode([
                    'en' => 'Our team brings together diverse expertise to deliver comprehensive solutions.',
                    'ar' => 'يجمع فريقنا بين خبرات متنوعة لتقديم حلول شاملة.'
                ]),
                'content' => json_encode([
                    'development_title' => 'Technical Development',
                    'development_description' => 'Expertise in cutting-edge development technologies and frameworks.',
                    'cloud_title' => 'Cloud Solutions',
                    'cloud_description' => 'Comprehensive cloud architecture and deployment expertise.',
                    'awards_title' => 'Industry Recognition',
                    'awards_description' => 'Recognized for excellence and innovation in our field.',
                    'speaking_title' => 'Speaking Engagements',
                    'speaking_description' => 'Regular speakers at industry conferences and events.',
                    'certification_1' => 'AWS Advanced Partner',
                    'certification_2' => 'Google Cloud Partner',
                    'certification_3' => 'Microsoft Gold Partner',
                    'award_1' => 'Innovation Excellence Award',
                    'award_2' => 'Best Tech Startup 2023',
                    'award_3' => 'Customer Satisfaction Champion',
                    'certifications_title' => 'Certifications & Awards'
                ]),
                'sort_order' => 6,
                'is_active' => true,
            ],
            [
                'section_name' => 'timeline',
                'title' => json_encode([
                    'en' => 'Our Journey',
                    'ar' => 'رحلتنا'
                ]),
                'description' => json_encode([
                    'en' => 'Key milestones in our company\'s growth and development.',
                    'ar' => 'المعالم الرئيسية في نمو وتطوير شركتنا.'
                ]),
                'content' => json_encode([
                    'timeline_2019_title' => 'Company Founded',
                    'timeline_2019_description' => 'Established with a vision to transform the technology landscape.',
                    'timeline_2020_title' => 'First Major Client',
                    'timeline_2020_description' => 'Secured our first enterprise-level client contract.',
                    'timeline_2022_title' => 'International Expansion',
                    'timeline_2022_description' => 'Expanded operations to serve clients across multiple continents.',
                    'timeline_2024_title' => 'Industry Recognition',
                    'timeline_2024_description' => 'Received multiple awards for innovation and excellence.'
                ]),
                'sort_order' => 7,
                'is_active' => true,
            ],
            [
                'section_name' => 'cta',
                'title' => json_encode([
                    'en' => 'Ready to Transform Your Business?',
                    'ar' => 'هل أنت مستعد لتحويل عملك؟'
                ]),
                'description' => json_encode([
                    'en' => 'Let\'s discuss how our solutions can drive your business forward.',
                    'ar' => 'دعونا نناقش كيف يمكن لحلولنا أن تدفع عملك للأمام.'
                ]),
                'content' => json_encode([
                    'cta_button_primary' => 'Get in Touch',
                    'cta_button_secondary' => 'Schedule a Call'
                ]),
                'sort_order' => 8,
                'is_active' => true,
            ]
        ];

        foreach ($sections as $sectionData) {
            AboutSection::updateOrCreate(
                ['section_name' => $sectionData['section_name']],
                $sectionData
            );
        }
    }
}
