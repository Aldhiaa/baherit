<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'slug' => 'mobile-app-development',
                'en' => [
                    'name' => 'Mobile App Development',
                    'short' => 'Design and development of mobile applications for iOS and Android using cutting-edge technologies like Flutter and React Native for high performance.',
                    'long' => 'Design and development of mobile applications for iOS and Android using cutting-edge technologies like Flutter and React Native for high performance.',
                ],
                'ar' => [
                    'name' => 'تطوير تطبيقات الهاتف المحمول',
                    'short' => 'تصميم وتطوير تطبيقات الهاتف المحمول لنظامي iOS و Android باستخدام أحدث التقنيات مثل Flutter و React Native للأداء العالي.',
                    'long' => 'تصميم وتطوير تطبيقات الهاتف المحمول لنظامي iOS و Android باستخدام أحدث التقنيات مثل Flutter و React Native للأداء العالي.',
                ],
            ],
            [
                'slug' => 'website-design-development',
                'en' => [
                    'name' => 'Website Design & Development',
                    'short' => 'Professional UI/UX Design to ensure a seamless user experience with website development using the latest technologies.',
                    'long' => 'Professional UI/UX Design to ensure a seamless user experience with website development using the latest technologies.',
                ],
                'ar' => [
                    'name' => 'تصميم وتطوير المواقع الإلكترونية',
                    'short' => 'تصميم واجهة مستخدم وتجربة مستخدم احترافية لضمان تجربة مستخدم سلسة مع تطوير المواقع باستخدام أحدث التقنيات.',
                    'long' => 'تصميم واجهة مستخدم وتجربة مستخدم احترافية لضمان تجربة مستخدم سلسة مع تطوير المواقع باستخدام أحدث التقنيات.',
                ],
            ],
            [
                'slug' => 'domain-registration-email-hosting',
                'en' => [
                    'name' => 'Domain Registration & Email Hosting',
                    'short' => 'Domain registration with premium names tailored to your brand and hosting plans that cater to diverse needs.',
                    'long' => 'Domain registration with premium names tailored to your brand and hosting plans that cater to diverse needs.',
                ],
                'ar' => [
                    'name' => 'تسجيل النطاقات واستضافة البريد الإلكتروني',
                    'short' => 'تسجيل النطاقات بأسماء مميزة مصممة لعلامتك التجارية وخطط الاستضافة التي تلبي احتياجات متنوعة.',
                    'long' => 'تسجيل النطاقات بأسماء مميزة مصممة لعلامتك التجارية وخطط الاستضافة التي تلبي احتياجات متنوعة.',
                ],
            ],
            [
                'slug' => 'network-management-cybersecurity',
                'en' => [
                    'name' => 'Network Management & Cybersecurity',
                    'short' => 'Design and implementation of network infrastructure for efficient connectivity with system protection against cyberattacks to secure sensitive data.',
                    'long' => 'Design and implementation of network infrastructure for efficient connectivity with system protection against cyberattacks to secure sensitive data.',
                ],
                'ar' => [
                    'name' => 'إدارة الشبكات والأمن السيبراني',
                    'short' => 'تصميم وتنفيذ بنية تحتية للشبكة للاتصال الفعال مع حماية النظام من الهجمات السيبرانية لتأمين البيانات الحساسة.',
                    'long' => 'تصميم وتنفيذ بنية تحتية للشبكة للاتصال الفعال مع حماية النظام من الهجمات السيبرانية لتأمين البيانات الحساسة.',
                ],
            ],
            [
                'slug' => 'it-support-technology-solutions',
                'en' => [
                    'name' => 'IT Support & Technology Solutions',
                    'short' => 'Troubleshooting and immediate support to maintain operations with software and app maintenance for enhanced performance.',
                    'long' => 'Troubleshooting and immediate support to maintain operations with software and app maintenance for enhanced performance.',
                ],
                'ar' => [
                    'name' => 'دعم تكنولوجيا المعلومات والحلول التقنية',
                    'short' => 'استكشاف الأخطاء وحلها والدعم الفوري للحفاظ على العمليات مع صيانة البرامج والتطبيقات للأداء المحسن.',
                    'long' => 'استكشاف الأخطاء وحلها والدعم الفوري للحفاظ على العمليات مع صيانة البرامج والتطبيقات للأداء المحسن.',
                ],
            ],
            [
                'slug' => 'security-smart-home-systems',
                'en' => [
                    'name' => 'Security & Smart Home Systems',
                    'short' => 'Installation of smart doors, intercom systems, surveillance cameras, alarm systems with instant notifications via smart applications.',
                    'long' => 'Installation of smart doors, intercom systems, surveillance cameras, alarm systems with instant notifications via smart applications.',
                ],
                'ar' => [
                    'name' => 'أنظمة الأمان والمنازل الذكية',
                    'short' => 'تركيب الأبواب الذكية وأنظمة الاتصال الداخلي وكاميرات المراقبة وأنظمة الإنذار مع إشعارات فورية عبر التطبيقات الذكية.',
                    'long' => 'تركيب الأبواب الذكية وأنظمة الاتصال الداخلي وكاميرات المراقبة وأنظمة الإنذار مع إشعارات فورية عبر التطبيقات الذكية.',
                ],
            ],
        ];

        $order = 1;
        foreach ($services as $s) {
            $service = Service::updateOrCreate(
                ['slug' => $s['slug']],
                [
                    'icon_path' => null,
                    'display_order' => $order,
                    'is_featured' => $order <= 4,
                    'is_active' => true,
                ]
            );
            $order++;

            $service->translations()->updateOrCreate(
                ['locale' => 'en'],
                [
                    'name' => $s['en']['name'],
                    'short_description' => $s['en']['short'],
                    'long_description' => $s['en']['long'],
                ]
            );

            $service->translations()->updateOrCreate(
                ['locale' => 'ar'],
                [
                    'name' => $s['ar']['name'],
                    'short_description' => $s['ar']['short'],
                    'long_description' => $s['ar']['long'],
                ]
            );
        }
    }
}
