<?php

namespace Database\Seeders;

use App\Models\Counter;
use App\Models\CounterTranslation;
use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    public function run(): void
    {
        $counters = [
            [
                'key' => 'successful_projects',
                'target_value' => 950,
                'display_order' => 1,
                'is_active' => true,
                'icon_path' => 'assets/images/v1/icon-s1.svg',
                'label_en' => 'Successfully Projects',
                'label_ar' => 'مشاريع ناجحة',
            ],
            [
                'key' => 'skilled_experts',
                'target_value' => 450,
                'display_order' => 2,
                'is_active' => true,
                'icon_path' => 'assets/images/v1/icon-s2.svg',
                'label_en' => 'Skilled Experts',
                'label_ar' => 'خبراء ماهرون',
            ],
            [
                'key' => 'happy_clients',
                'target_value' => 25000,
                'display_order' => 3,
                'is_active' => true,
                'icon_path' => 'assets/images/v1/icon-s3.svg',
                'label_en' => 'Happy Clients',
                'label_ar' => 'عملاء سعداء',
            ],
            [
                'key' => 'industry_awards',
                'target_value' => 120,
                'display_order' => 4,
                'is_active' => true,
                'icon_path' => 'assets/images/v1/icon-s4.svg',
                'label_en' => 'Industry Awards',
                'label_ar' => 'جوائز الصناعة',
            ],
        ];

        foreach ($counters as $data) {
            $counter = Counter::updateOrCreate(
                ['key' => $data['key']],
                [
                    'icon_path' => $data['icon_path'],
                    'target_value' => $data['target_value'],
                    'display_order' => $data['display_order'],
                    'is_active' => $data['is_active'],
                ]
            );

            CounterTranslation::updateOrCreate(
                ['counter_id' => $counter->id, 'locale' => 'en'],
                ['label' => $data['label_en']]
            );

            CounterTranslation::updateOrCreate(
                ['counter_id' => $counter->id, 'locale' => 'ar'],
                ['label' => $data['label_ar']]
            );
        }
    }
}
