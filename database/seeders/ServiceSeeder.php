<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => [
                    'en' => 'Mobile App Development',
                    'ar' => 'تطوير تطبيقات الهاتف المحمول'
                ],
                'description' => [
                    'en' => 'Design and development of mobile applications for iOS and Android using cutting-edge technologies like Flutter and React Native for high performance.',
                    'ar' => 'تصميم وتطوير تطبيقات الهاتف المحمول لنظامي iOS و Android باستخدام أحدث التقنيات مثل Flutter و React Native للأداء العالي.'
                ],
                'category' => 'development',
                'icon' => 'mobile',
                'features' => [
                    'en' => [
                        'Design and development of mobile applications for iOS and Android',
                        'Utilization of cutting-edge technologies like Flutter and React Native for high performance',
                        'Integration with websites for a seamless cross-platform experience',
                        'App maintenance and updates to ensure continuity and improved performance'
                    ],
                    'ar' => [
                        'تصميم وتطوير تطبيقات الهاتف المحمول لنظامي iOS و Android',
                        'استخدام أحدث التقنيات مثل Flutter و React Native للأداء العالي',
                        'التكامل مع المواقع الإلكترونية لتجربة سلسة عبر المنصات',
                        'صيانة التطبيقات والتحديثات لضمان الاستمرارية والأداء المحسن'
                    ]
                ],
                'timeline' => '3-9 months'
            ],
            [
                'title' => [
                    'en' => 'Website Design & Development',
                    'ar' => 'تصميم وتطوير المواقع الإلكترونية'
                ],
                'description' => [
                    'en' => 'Professional UI/UX Design to ensure a seamless user experience with website development using the latest technologies.',
                    'ar' => 'تصميم واجهة مستخدم وتجربة مستخدم احترافية لضمان تجربة مستخدم سلسة مع تطوير المواقع باستخدام أحدث التقنيات.'
                ],
                'category' => 'development',
                'icon' => 'web',
                'features' => [
                    'en' => [
                        'Professional UI/UX Design to ensure a seamless user experience',
                        'Website development using the latest technologies (HTML, CSS, JS, Laravel, WordPress)',
                        'Responsive design for compatibility across all devices to ensure optimal performance',
                        'E-commerce development with enhanced user experience and speed'
                    ],
                    'ar' => [
                        'تصميم واجهة مستخدم وتجربة مستخدم احترافية لضمان تجربة مستخدم سلسة',
                        'تطوير المواقع باستخدام أحدث التقنيات (HTML, CSS, JS, Laravel, WordPress)',
                        'تصميم متجاوب للتوافق مع جميع الأجهزة لضمان الأداء الأمثل',
                        'تطوير التجارة الإلكترونية مع تحسين تجربة المستخدم والسرعة'
                    ]
                ],
                'timeline' => '2-8 months'
            ],
            [
                'title' => [
                    'en' => 'Domain Registration & Email Hosting',
                    'ar' => 'تسجيل النطاقات واستضافة البريد الإلكتروني'
                ],
                'description' => [
                    'en' => 'Domain registration with premium names tailored to your brand and hosting plans that cater to diverse needs.',
                    'ar' => 'تسجيل النطاقات بأسماء مميزة مصممة لعلامتك التجارية وخطط الاستضافة التي تلبي احتياجات متنوعة.'
                ],
                'category' => 'cloud',
                'icon' => 'domain',
                'features' => [
                    'en' => [
                        'Domain registration with premium names tailored to your brand',
                        'Hosting plans that cater to diverse needs',
                        'Professional email setup using the domain name',
                        'SSL certificate management for secure data protection',
                        '24/7 technical support to ensure uninterrupted service'
                    ],
                    'ar' => [
                        'تسجيل النطاقات بأسماء مميزة مصممة لعلامتك التجارية',
                        'خطط الاستضافة التي تلبي احتياجات متنوعة',
                        'إعداد البريد الإلكتروني الاحترافي باستخدام اسم النطاق',
                        'إدارة شهادات SSL لحماية البيانات الآمنة',
                        'دعم فني على مدار الساعة لضمان خدمة غير منقطعة'
                    ]
                ],
                'timeline' => '1-2 weeks'
            ],
            [
                'title' => [
                    'en' => 'Network Management & Cybersecurity',
                    'ar' => 'إدارة الشبكات والأمن السيبراني'
                ],
                'description' => [
                    'en' => 'Design and implementation of network infrastructure for efficient connectivity with system protection against cyberattacks to secure sensitive data.',
                    'ar' => 'تصميم وتنفيذ بنية تحتية للشبكة للاتصال الفعال مع حماية النظام من الهجمات السيبرانية لتأمين البيانات الحساسة.'
                ],
                'category' => 'security',
                'icon' => 'security',
                'features' => [
                    'en' => [
                        'Design and implementation of network infrastructure for efficient connectivity',
                        'Network performance monitoring and quick, professional troubleshooting',
                        'System protection against cyberattacks to secure sensitive data',
                        'Firewall and protection system updates against emerging threats',
                        'Comprehensive security audits and vulnerability assessments for system protection'
                    ],
                    'ar' => [
                        'تصميم وتنفيذ بنية تحتية للشبكة للاتصال الفعال',
                        'مراقبة أداء الشبكة واستكشاف الأخطاء وإصلاحها بسرعة واحترافية',
                        'حماية النظام من الهجمات السيبرانية لتأمين البيانات الحساسة',
                        'تحديثات جدار الحماية ونظام الحماية ضد التهديدات الناشئة',
                        'audits أمنية شاملة وتقييمات الثغرات لحماية النظام'
                    ]
                ],
                'timeline' => '1-6 months'
            ],
            [
                'title' => [
                    'en' => 'IT Support & Technology Solutions',
                    'ar' => 'دعم تكنولوجيا المعلومات والحلول التقنية'
                ],
                'description' => [
                    'en' => 'Troubleshooting and immediate support to maintain operations with software and app maintenance for enhanced performance.',
                    'ar' => 'استكشاف الأخطاء وحلها والدعم الفوري للحفاظ على العمليات مع صيانة البرامج والتطبيقات للأداء المحسن.'
                ],
                'category' => 'support',
                'icon' => 'support',
                'features' => [
                    'en' => [
                        'Troubleshooting and immediate support to maintain operations',
                        'Software and app maintenance for enhanced performance',
                        'Device and network setup using the latest technologies',
                        'Data protection and system security against breaches',
                        'Staff training on modern tools and technologies to boost productivity'
                    ],
                    'ar' => [
                        'استكشاف الأخطاء وحلها والدعم الفوري للحفاظ على العمليات',
                        'صيانة البرامج والتطبيقات للأداء المحسن',
                        'إعداد الأجهزة والشبكات باستخدام أحدث التقنيات',
                        'حماية البيانات وأمن النظام من الاختراقات',
                        'تدريب الموظفين على الأدوات والتقنيات الحديثة لتعزيز الإنتاجية'
                    ]
                ],
                'timeline' => 'Ongoing'
            ],
            [
                'title' => [
                    'en' => 'Security & Smart Home Systems',
                    'ar' => 'أنظمة الأمان والمنازل الذكية'
                ],
                'description' => [
                    'en' => 'Installation of smart doors, intercom systems, surveillance cameras, alarm systems with instant notifications via smart applications.',
                    'ar' => 'تركيب الأبواب الذكية وأنظمة الاتصال الداخلي وكاميرات المراقبة وأنظمة الإنذار مع إشعارات فورية عبر التطبيقات الذكية.'
                ],
                'category' => 'security',
                'icon' => 'smart-home',
                'features' => [
                    'en' => [
                        'Smart doors: Installation of fingerprint, passcode, or app-controlled doors integrated with smart home systems',
                        'Intercom systems: Advanced intercoms with display screens connected to cameras and smart apps',
                        'Surveillance cameras: High-definition (HD, 4K) cameras with night vision and online monitoring',
                        'Alarm systems: Theft and fire alarm systems with instant notifications via smart applications',
                        'Smart home integration: Control security, lighting, heating, and cooling via mobile for full smart home management'
                    ],
                    'ar' => [
                        'الأبواب الذكية: تركيب الأبواب التي تعمل بالبصمة أو كلمة المرور أو التحكم عبر التطبيق والمتكاملة مع أنظمة المنازل الذكية',
                        'أنظمة الاتصال الداخلي: أنظمة اتصال متقدمة مع شاشات عرض متصلة بالكاميرات والتطبيقات الذكية',
                        'كاميرات المراقبة: كاميرات عالية الدقة (HD, 4K) مع رؤية ليلية ومراقبة عبر الإنترنت',
                        'أنظمة الإنذار: أنظمة إنذار السرقة والحرائق مع إشعارات فورية عبر التطبيقات الذكية',
                        'دمج المنزل الذكي: التحكم في الأمان والإضاءة والتدفئة والتبريد عبر الهاتف لإدارة منزل ذكي كاملة'
                    ]
                ],
                'timeline' => '2-6 months'
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
