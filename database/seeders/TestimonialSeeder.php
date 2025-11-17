<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'avatar' => 'laura-mcalister.jpg',
                'rating' => 5,
                'order' => 1,
                'active' => true,
                'en' => [
                    'author_name' => 'Laura McAlister',
                    'author_title' => 'Tech Startup Founder',
                    'quote' => 'TechIN completely transformed our IT infrastructure. Their team was knowledgeable, responsive, and provided solutions that significantly improved our efficiency. Highly recommended!',
                ],
                'ar' => [
                    'author_name' => 'لورا ماكاليستر',
                    'author_title' => 'مؤسسة شركة ناشئة في مجال التكنولوجيا',
                    'quote' => 'لقد قامت TechIN بتحويل البنية التحتية لتكنولوجيا المعلومات لدينا بالكامل. كان فريقهم على دراية واستجابة وقدموا حلولاً حسنت كفاءتنا بشكل كبير. موصى به بشدة!',
                ],
            ],
            [
                'avatar' => 'ahmed-khalifa.jpg',
                'rating' => 4,
                'order' => 2,
                'active' => true,
                'en' => [
                    'author_name' => 'Ahmed Khalifa',
                    'author_title' => 'Operations Director, Al Noor Logistics',
                    'quote' => 'The BaherTech team helped us migrate to a secure cloud environment without downtime. Their professionalism and attention to detail exceeded our expectations.',
                ],
                'ar' => [
                    'author_name' => 'أحمد خليفة',
                    'author_title' => 'مدير العمليات، شركة النور للخدمات اللوجستية',
                    'quote' => 'ساعدنا فريق باهرتك في الانتقال إلى بيئة سحابية آمنة دون أي توقف. الاحترافية والانتباه للتفاصيل تجاوزا توقعاتنا.',
                ],
            ],
            [
                'avatar' => 'sara-al-rashed.jpg',
                'rating' => 5,
                'order' => 3,
                'active' => true,
                'en' => [
                    'author_name' => 'Sara Al-Rashed',
                    'author_title' => 'Head of Marketing, Horizon Retail',
                    'quote' => 'Their custom digital solutions revitalized our online presence. We saw a clear boost in engagement and conversions within a few weeks.',
                ],
                'ar' => [
                    'author_name' => 'سارة الراشد',
                    'author_title' => 'رئيسة التسويق، شركة هورايزن للتجزئة',
                    'quote' => 'أعادت حلولهم الرقمية المخصصة الحيوية لحضورنا الإلكتروني. شهدنا زيادة واضحة في التفاعل والمبيعات خلال أسابيع قليلة.',
                ],
            ],
        ];

        foreach ($testimonials as $data) {
            $testimonial = Testimonial::updateOrCreate(
                [
                    'display_order' => $data['order'],
                ],
                [
                    'rating' => $data['rating'],
                    'display_order' => $data['order'],
                    'is_active' => $data['active'],
                    'avatar_path' => $this->storeAvatar($data['avatar']),
                ]
            );

            $testimonial->translations()->updateOrCreate(
                ['locale' => 'en'],
                [
                    'author_name' => $data['en']['author_name'],
                    'author_title' => $data['en']['author_title'],
                    'quote' => $data['en']['quote'],
                ]
            );

            $testimonial->translations()->updateOrCreate(
                ['locale' => 'ar'],
                [
                    'author_name' => $data['ar']['author_name'],
                    'author_title' => $data['ar']['author_title'],
                    'quote' => $data['ar']['quote'],
                ]
            );
        }
    }

    private function storeAvatar(?string $filename): ?string
    {
        if (!$filename) {
            return null;
        }

        $sourcePath = database_path('seeders/data/testimonials/' . $filename);

        if (!file_exists($sourcePath)) {
            return null;
        }

        $destinationDirectory = 'testimonials/avatars';
        $destinationPath = $destinationDirectory . '/' . $filename;

        if (!Storage::disk('public')->exists($destinationPath)) {
            Storage::disk('public')->put($destinationPath, file_get_contents($sourcePath));
        }

        return $destinationPath;
    }
}
