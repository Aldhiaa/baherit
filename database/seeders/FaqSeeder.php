<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FaqCategory;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'order' => 1,
                'en' => 'Platform & Features',
                'ar' => 'المنصة والميزات',
                'faqs' => [
                    [
                        'order' => 1,
                        'en' => [
                            'question' => 'What makes the RioMarket platform different?',
                            'answer' => 'RioMarket combines e-commerce, POS, intelligent order management, and real-time analytics in a single secure platform so retailers can manage both online and in-store operations seamlessly.',
                        ],
                        'ar' => [
                            'question' => 'ما الذي يميز منصة ريوماركت؟',
                            'answer' => 'تجمع ريوماركت بين التجارة الإلكترونية ونظام نقاط البيع وإدارة الطلبات الذكية والتحليلات الفورية في منصة واحدة آمنة، مما يتيح لتجار التجزئة إدارة العمليات عبر الإنترنت وفي المتجر بسهولة.',
                        ],
                    ],
                    [
                        'order' => 2,
                        'en' => [
                            'question' => 'Does Intelligents ERP support multiple branches?',
                            'answer' => 'Yes, Intelligents ERP is built for multi-branch and multi-warehouse operations with granular permissions, enabling organizations to unify processes across all locations.',
                        ],
                        'ar' => [
                            'question' => 'هل يدعم نظام إنترليجنتس ERP الفروع المتعددة؟',
                            'answer' => 'نعم، تم تصميم نظام إنترليجنتس ERP لدعم العمليات متعددة الفروع والمستودعات مع أذونات تفصيلية، مما يمكّن المؤسسات من توحيد العمليات عبر جميع المواقع.',
                        ],
                    ],
                    [
                        'order' => 3,
                        'en' => [
                            'question' => 'How flexible is the ERP customization?',
                            'answer' => 'The ERP platform is fully modular with configurable workflows, reports, and dashboards, allowing businesses to tailor the system to their processes without custom code.',
                        ],
                        'ar' => [
                            'question' => 'ما مدى مرونة تخصيص نظام ERP؟',
                            'answer' => 'النظام معياري بالكامل مع تدفقات عمل وتقارير ولوحات معلومات قابلة للتهيئة، مما يسمح للشركات بتكييف النظام مع عملياتها دون الحاجة إلى برمجة مخصصة.',
                        ],
                    ],
                ],
            ],
            [
                'order' => 2,
                'en' => 'Implementation & Support',
                'ar' => 'التنفيذ والدعم',
                'faqs' => [
                    [
                        'order' => 1,
                        'en' => [
                            'question' => 'What is the typical implementation timeline?',
                            'answer' => 'Implementation is phased. Core platform rollout takes 4-6 weeks, followed by POS setup, integrations, and user training. Timelines adjust based on project scope and data migration complexity.',
                        ],
                        'ar' => [
                            'question' => 'ما هو الإطار الزمني المعتاد للتنفيذ؟',
                            'answer' => 'يتم التنفيذ على مراحل. يستغرق إطلاق المنصة الأساسية من 4 إلى 6 أسابيع، يتبعها إعداد نظام نقاط البيع والتكاملات وتدريب المستخدمين. يتم تعديل الجداول الزمنية وفقاً لنطاق المشروع وتعقيد ترحيل البيانات.',
                        ],
                    ],
                    [
                        'order' => 2,
                        'en' => [
                            'question' => 'Do you handle data migration?',
                            'answer' => 'Yes, we migrate product catalogs, customer records, inventory, and historical sales data. We perform validation and rollback testing to ensure the integrity of legacy information.',
                        ],
                        'ar' => [
                            'question' => 'هل تتولون ترحيل البيانات؟',
                            'answer' => 'نعم، نقوم بترحيل قوائم المنتجات وسجلات العملاء والمخزون وبيانات المبيعات التاريخية. نجري اختبارات التحقق والتراجع لضمان سلامة البيانات القديمة.',
                        ],
                    ],
                    [
                        'order' => 3,
                        'en' => [
                            'question' => 'What kind of training do you provide?',
                            'answer' => 'We deliver bilingual training workshops, on-demand video tutorials, and detailed SOPs covering POS usage, reporting, and administrative tasks to ensure smooth adoption.',
                        ],
                        'ar' => [
                            'question' => 'ما نوع التدريب الذي توفرونه؟',
                            'answer' => 'نقدم ورش عمل تدريبية ثنائية اللغة ودروس فيديو حسب الطلب وإجراءات تشغيل قياسية مفصلة تغطي استخدام نقاط البيع والتقارير والمهام الإدارية لضمان اعتماد سلس.',
                        ],
                    ],
                ],
            ],
            [
                'order' => 3,
                'en' => 'Security & Operations',
                'ar' => 'الأمان والعمليات',
                'faqs' => [
                    [
                        'order' => 1,
                        'en' => [
                            'question' => 'How do you secure sensitive business data?',
                            'answer' => 'All platforms use encryption at rest and in transit, role-based access, and continuous monitoring. We also implement automated backups and multi-region redundancy for mission-critical systems.',
                        ],
                        'ar' => [
                            'question' => 'كيف تقومون بتأمين بيانات الأعمال الحساسة؟',
                            'answer' => 'تستخدم جميع المنصات التشفير أثناء التخزين والنقل، والتحكم في الوصول بناءً على الأدوار، والمراقبة المستمرة. كما نقوم بتنفيذ نسخ احتياطية آلية وتكرار متعدد المناطق للأنظمة الحيوية.',
                        ],
                    ],
                    [
                        'order' => 2,
                        'en' => [
                            'question' => 'Is there ongoing support after launch?',
                            'answer' => 'Yes, our support plans include 24/7 monitoring, SLA-driven response times, regular performance audits, and dedicated success managers for strategic guidance.',
                        ],
                        'ar' => [
                            'question' => 'هل يوجد دعم مستمر بعد الإطلاق؟',
                            'answer' => 'نعم، تشمل خطط الدعم لدينا مراقبة على مدار الساعة، وأوقات استجابة وفقاً لاتفاقيات مستوى الخدمة، ومراجعات أداء منتظمة، ومديري نجاح مخصصين للإرشاد الإستراتيجي.',
                        ],
                    ],
                    [
                        'order' => 3,
                        'en' => [
                            'question' => 'Can the solutions scale as operations grow?',
                            'answer' => 'Absolutely. The architecture is cloud-native with auto-scaling, modular service components, and API integrations, ensuring the platform adapts to new channels and higher transaction volumes.',
                        ],
                        'ar' => [
                            'question' => 'هل يمكن للحلول التوسع مع نمو العمليات؟',
                            'answer' => 'بالتأكيد. البنية معتمدة على السحابة مع قابلية التوسع التلقائي ومكونات خدمة معيارية وتكاملات عبر واجهات برمجة التطبيقات، مما يضمن تكيف المنصة مع القنوات الجديدة وزيادة حجم المعاملات.',
                        ],
                    ],
                ],
            ],
        ];

        foreach ($categories as $categoryData) {
            $category = FaqCategory::updateOrCreate(
                ['display_order' => $categoryData['order']],
                [
                    'display_order' => $categoryData['order'],
                    'is_active' => true,
                ]
            );

            $category->translations()->updateOrCreate(
                ['locale' => 'en'],
                ['name' => $categoryData['en']]
            );

            $category->translations()->updateOrCreate(
                ['locale' => 'ar'],
                ['name' => $categoryData['ar']]
            );

            foreach ($categoryData['faqs'] as $faqData) {
                $faq = Faq::updateOrCreate(
                    [
                        'faq_category_id' => $category->id,
                        'display_order' => $faqData['order'],
                    ],
                    [
                        'faq_category_id' => $category->id,
                        'display_order' => $faqData['order'],
                        'is_active' => true,
                    ]
                );

                $faq->translations()->updateOrCreate(
                    ['locale' => 'en'],
                    [
                        'question' => $faqData['en']['question'],
                        'answer' => $faqData['en']['answer'],
                    ]
                );

                $faq->translations()->updateOrCreate(
                    ['locale' => 'ar'],
                    [
                        'question' => $faqData['ar']['question'],
                        'answer' => $faqData['ar']['answer'],
                    ]
                );
            }
        }
    }
}
