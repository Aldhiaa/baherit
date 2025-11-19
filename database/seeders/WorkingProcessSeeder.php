<?php

namespace Database\Seeders;

use App\Models\WorkingProcess;
use App\Models\WorkingProcessTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkingProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $workingProcesses = [
            [
                'icon_path' => null,
                'number_tag_path' => null,
                'display_order' => 1,
                'is_active' => true,
                'translations' => [
                    'en' => [
                        'title' => 'Consultation And Assessment',
                        'description' => 'We start by understanding your business needs and challenges, then conduct a thorough assessment to identify the best tailored IT solutions.',
                    ],
                    'ar' => [
                        'title' => 'الاستشارة والتقييم',
                        'description' => 'نبدأ بفهم احتياجات عملك وتحدياتك، ثم نقوم بإجراء تقييم شامل لتحديد أفضل حلول تكنولوجيا المعلومات المخصصة.',
                    ],
                ],
            ],
            [
                'icon_path' => null,
                'number_tag_path' => null,
                'display_order' => 2,
                'is_active' => true,
                'translations' => [
                    'en' => [
                        'title' => 'Strategy And Planning',
                        'description' => 'Based on the assessment, we create a tailored IT strategy, detailing the technologies needed to enhance your operations, efficiency, and security.',
                    ],
                    'ar' => [
                        'title' => 'الاستراتيجية والتخطيط',
                        'description' => 'بناءً على التقييم، نقوم بإنشاء استراتيجية تكنولوجيا معلومات مخصصة، تفصل التقنيات المطلوبة لتعزيز عملياتك وكفاءتك وأمانك.',
                    ],
                ],
            ],
            [
                'icon_path' => null,
                'number_tag_path' => null,
                'display_order' => 3,
                'is_active' => true,
                'translations' => [
                    'en' => [
                        'title' => 'Implementation And Integration',
                        'description' => 'Our team implements solutions seamlessly, ensuring smooth integration with your infrastructure and minimal business disruption.',
                    ],
                    'ar' => [
                        'title' => 'التنفيذ والتكامل',
                        'description' => 'يقوم فريقنا بتنفيذ الحلول بسلاسة، مما يضمن التكامل السلس مع البنية التحتية الخاصة بك والحد الأدنى من اضطراب الأعمال.',
                    ],
                ],
            ],
            [
                'icon_path' => null,
                'number_tag_path' => null,
                'display_order' => 4,
                'is_active' => true,
                'translations' => [
                    'en' => [
                        'title' => 'Support And Optimization',
                        'description' => 'After deployment, we offer ongoing support and optimization to keep your systems secure, efficient, and scalable as your business grows.',
                    ],
                    'ar' => [
                        'title' => 'الدعم والتحسين',
                        'description' => 'بعد النشر، نقدم الدعم المستمر والتحسين للحفاظ على أنظمتك آمنة وفعالة وقابلة للتوسع مع نمو عملك.',
                    ],
                ],
            ],
        ];

        foreach ($workingProcesses as $processData) {
            $translations = $processData['translations'];
            unset($processData['translations']);

            $workingProcess = WorkingProcess::create($processData);

            foreach ($translations as $locale => $translation) {
                WorkingProcessTranslation::create([
                    'working_process_id' => $workingProcess->id,
                    'locale' => $locale,
                    'title' => $translation['title'],
                    'description' => $translation['description'],
                ]);
            }
        }
    }
}
