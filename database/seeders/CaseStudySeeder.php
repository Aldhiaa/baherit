<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CaseStudy;

class CaseStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $caseStudies = [
            [
                'title' => [
                    'en' => 'RioMarket Smart E Commerce Platform',
                    'ar' => 'منصة ريوماركت للتجارة الإلكترونية الذكية'
                ],
                'industry' => 'retail',
                'description' => [
                    'en' => 'A fully integrated e-commerce platform that represents an advanced model of smart commerce with an integrated Point of Sale (POS) system, interactive dashboard, intelligent order management, and advanced reporting tools.',
                    'ar' => 'منصة تجارة إلكترونية متكاملة تمثل نموذجاً متقدماً للتجارة الذكية مع نظام نقاط بيع متكامل (POS)، لوحة تحكم تفاعلية، إدارة ذكية للطلبات، وأدوات تقارير متقدمة.'
                ],
                'challenge' => [
                    'en' => 'In response to the rapid digital transformation, businesses needed a comprehensive e-commerce solution that could empower them in managing modern sales and marketing operations effectively. The challenge was to create a platform that prioritizes security, flexibility, and ease of use while providing advanced features.',
                    'ar' => 'استجابة للتحول الرقمي السريع، احتاجت الشركات إلى حل شامل للتجارة الإلكترونية يمكن أن يمكّنها من إدارة عمليات المبيعات والتسويق الحديثة بفعالية. التحدي كان في إنشاء منصة تُعطي الأولوية للأمان والمرونة وسهولة الاستخدام مع توفير ميزات متقدمة.'
                ],
                'solution' => [
                    'en' => 'We developed RioMarket, a comprehensive digital ecosystem featuring an integrated Point of Sale (POS) system, an interactive dashboard, intelligent order management, and advanced reporting tools. The platform was designed with the latest web technologies, ensuring security, flexibility, and ease of use.',
                    'ar' => 'طورنا ريوماركت، نظام بيئي رقمي شامل يضم نظام نقاط بيع متكامل (POS)، لوحة تحكم تفاعلية، إدارة ذكية للطلبات، وأدوات تقارير متقدمة. صُممت المنصة بأحدث تقنيات الويب، مما يضمن الأمان والمرونة وسهولة الاستخدام.'
                ],
                'results' => [
                    'en' => 'RioMarket successfully transformed how businesses manage their operations by providing a comprehensive digital ecosystem. The platform now serves multiple businesses with real-time performance tracking, intelligent order management, and advanced analytics to help decision-makers optimize performance and make data-driven decisions.',
                    'ar' => 'نجح ريوماركت في تحويل طريقة إدارة الشركات لعملياتها من خلال توفير نظام بيئي رقمي شامل. تخدم المنصة الآن عدة شركات بتتبع أداء الوقت الفعلي، وإدارة ذكية للطلبات، وتحليلات متقدمة لمساعدة صانعي القرار على تحسين الأداء واتخاذ قرارات مبنية على البيانات.'
                ],
                'metrics' => [
                    ['label' => ['en' => 'Performance', 'ar' => 'الأداء'], 'value' => 'Real-time'],
                    ['label' => ['en' => 'Order Management', 'ar' => 'إدارة الطلبات'], 'value' => 'Intelligent'],
                    ['label' => ['en' => 'Analytics', 'ar' => 'التحليلات'], 'value' => 'Advanced']
                ],
                'image_url' => 'images/projects/01JRDTDNHQTDJKJEEFT4ZK2578.png',
                'is_featured' => true,
                'completed_at' => '2024-10-01'
            ],
            [
                'title' => [
                    'en' => 'Intelligents ERP System',
                    'ar' => 'نظام إدارة موارد المؤسسات إنترليجنتس'
                ],
                'industry' => 'technology',
                'description' => [
                    'en' => 'A comprehensive ERP system that combines cloud power with full flexibility, providing a complete tool for business management with multi-branch and multi-warehouse support.',
                    'ar' => 'نظام ERP شامل يجمع بين قوة الحوسبة السحابية مع المرونة الكاملة، مما يوفر أداة كاملة لإدارة الأعمال مع دعم للفروع المتعددة والمستودعات المتعددة.'
                ],
                'challenge' => [
                    'en' => 'In today\'s fast-evolving business world, it became essential for businesses to manage their operations efficiently and ensure smooth processes across all departments and branches. The challenge was to create a system that provides access from anywhere without the need for special devices or complex installations.',
                    'ar' => 'في عالم الأعمال سريع التطور اليوم، أصبح من الضروري للشركات إدارة عملياتها بكفاءة وضمان سير العمليات بسلاسة عبر جميع الأقسام والفروع. التحدي كان في إنشاء نظام يوفر الوصول من أي مكان دون الحاجة إلى أجهزة خاصة أو تركيبات معقدة.'
                ],
                'solution' => [
                    'en' => 'We designed Intelligents ERP, a system that combines cloud power with complete flexibility. The solution includes multi-branch and multi-warehouse support, user access permissions, inventory management, service management, HRM, CRM, comprehensive reporting, and a user-friendly interface.',
                    'ar' => 'صممنا نظام إنترليجنتس ERP، وهو نظام يجمع بين قوة الحوسبة السحابية مع المرونة الكاملة. يتضمن الحل دعم الفروع المتعددة والمستودعات المتعددة، وأذونات الوصول للمستخدمين، وإدارة المخزون، وإدارة الخدمات، ونظام إدارة الموارد البشرية، وإدارة علاقات العملاء، وتقارير شاملة، وواجهة سهلة الاستخدام.'
                ],
                'results' => [
                    'en' => 'Intelligents ERP became the ideal choice for businesses looking for an all-in-one solution to manage their operations with ease. The system offers an advanced, fully customizable platform tailored to business needs, helping manage operations efficiently and providing complete confidence in every aspect of the business.',
                    'ar' => 'أصبح نظام إنترليجنتس ERP الخيار المثالي للشركات التي تبحث عن حل شامل لإدارة عملياتها بسهولة. يقدم النظام منصة متقدمة وقابلة للتخصيص بالكامل مصممة وفقاً لاحتياجات الأعمال، مما يساعد على إدارة العمليات بكفاءة ويوفر ثقة كاملة في كل جانب من جوانب العمل.'
                ],
                'metrics' => [
                    ['label' => ['en' => 'Branches', 'ar' => 'الفروع'], 'value' => 'Multi'],
                    ['label' => ['en' => 'Flexibility', 'ar' => 'المرونة'], 'value' => 'Complete'],
                    ['label' => ['en' => 'Customization', 'ar' => 'التخصيص'], 'value' => 'Full']
                ],
                'image_url' => 'https://images.unsplash.com/photo-1551836022-d5d88e9218df',
                'is_featured' => true,
                'completed_at' => '2024-08-15'
            ],
            [
                'title' => [
                    'en' => 'Digital Transformation for Manufacturing Company',
                    'ar' => 'التحول الرقمي لشركة تصنيع'
                ],
                'industry' => 'manufacturing',
                'description' => [
                    'en' => 'Complete digital transformation solution for a manufacturing company with integrated inventory management, production tracking, and supply chain optimization.',
                    'ar' => 'حل شامل للتحول الرقمي لشركة تصنيع مع إدارة متكاملة للمخزون، وتتبع الإنتاج، وتحسين سلسلة التوريد.'
                ],
                'challenge' => [
                    'en' => 'The client was struggling with disconnected systems that led to inventory discrepancies, production delays, and limited visibility into their supply chain operations. Manual processes were time-consuming and error-prone.',
                    'ar' => 'كان العميل يعاني من أنظمة غير متصلة أدت إلى تفاوتات في المخزون، وتأخيرات في الإنتاج، ورؤية محدودة لعمليات سلسلة التوريد. كانت العمليات اليدوية تستهلك الوقت وعرضة للأخطاء.'
                ],
                'solution' => [
                    'en' => 'We implemented a unified digital platform that integrated all manufacturing processes, automated inventory management, streamlined production tracking, and provided real-time supply chain visibility. The solution included IoT sensors for equipment monitoring and predictive maintenance.',
                    'ar' => 'نفذنا منصة رقمية موحدة دمجت جميع عمليات التصنيع، وأتمتة إدارة المخزون، وتبسيط تتبع الإنتاج، ووفرت رؤية لسلسلة التوريد في الوقت الفعلي. تضمن الحل أجهزة استشعار إنترنت الأشياء لمراقبة المعدات والصيانة التنبؤية.'
                ],
                'results' => [
                    'en' => 'Production efficiency increased by 35%, inventory accuracy improved to 99.7%, and supply chain visibility enabled better decision-making. The client reduced operational costs by 20% and improved delivery times by 30%.',
                    'ar' => 'ازدادت كفاءة الإنتاج بنسبة 35%، وتحسنت دقة المخزون إلى 99.7%، ومكنّت رؤية سلسلة التوريد من اتخاذ قرارات أفضل. قلل العميل من تكاليف التشغيل بنسبة 20% وحسن أوقات التسليم بنسبة 30%.'
                ],
                'metrics' => [
                    ['label' => ['en' => 'Efficiency', 'ar' => 'الكفاءة'], 'value' => '+35%'],
                    ['label' => ['en' => 'Inventory Accuracy', 'ar' => 'دقة المخزون'], 'value' => '99.7%'],
                    ['label' => ['en' => 'Cost Reduction', 'ar' => 'تقليل التكاليف'], 'value' => '-20%']
                ],
                'image_url' => 'https://images.unsplash.com/photo-1563014959-2a0c0c7c0a4a',
                'is_featured' => false,
                'completed_at' => '2024-07-20'
            ]
        ];

        foreach ($caseStudies as $caseStudy) {
            CaseStudy::create($caseStudy);
        }
    }
}
