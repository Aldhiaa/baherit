<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogTranslation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'slug' => 'optimize-it-infrastructure',
                'featured_image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1200&q=80',
                'author_name' => 'BaherTech Editorial Team',
                'read_time' => 6,
                'published_at' => '2024-10-12 09:30:00',
                'status' => Blog::STATUS_PUBLISHED,
                'is_featured' => true,
                'title_en' => 'How to Optimize Your IT Infrastructure for Maximum Efficiency',
                'excerpt_en' => 'Discover a practical roadmap for auditing, modernizing, and scaling your IT infrastructure without disrupting daily operations.',
                'content_en' => <<<MARKDOWN
<p>Modern businesses rely on stable infrastructure to deliver consistent customer experiences. In this guide we cover:</p>
<ul>
    <li>Baseline assessments for legacy systems</li>
    <li>Adopting hybrid cloud models safely</li>
    <li>Automation opportunities that reduce downtime</li>
    <li>Practical KPIs for measuring infrastructure ROI</li>
</ul>
<p>By combining proactive monitoring with modular architectures, teams can unlock scalability and keep operational costs predictable.</p>
MARKDOWN,
                'title_ar' => 'كيفية تحسين البنية التحتية لتقنية المعلومات لتحقيق أقصى قدر من الكفاءة',
                'excerpt_ar' => 'اكتشف خارطة طريق عملية لمراجعة وتحديث وتوسيع البنية التحتية لتقنية المعلومات دون تعطيل العمليات اليومية.',
                'content_ar' => <<<MARKDOWN
<p>تعتمد الأعمال الحديثة على بنية تحتية مستقرة لتقديم تجربة عملاء متسقة. في هذا الدليل نغطي:</p>
<ul>
    <li>تقييم الوضع الحالي للأنظمة القديمة</li>
    <li>اعتماد نماذج السحابة الهجينة بأمان</li>
    <li>فرص الأتمتة التي تقلل وقت التعطل</li>
    <li>مؤشرات الأداء الرئيسية العملية لقياس العائد على الاستثمار</li>
</ul>
<p>من خلال الجمع بين المراقبة الاستباقية والهياكل المعيارية، يمكن للفرق تحقيق قابلية التوسع مع الحفاظ على التكاليف التشغيلية متوقعة.</p>
MARKDOWN,
            ],
            [
                'slug' => 'erp-digital-operations',
                'featured_image' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1200&q=80',
                'author_name' => 'Sara Al-Rashed',
                'read_time' => 5,
                'published_at' => '2024-09-02 14:00:00',
                'status' => Blog::STATUS_PUBLISHED,
                'is_featured' => true,
                'title_en' => 'Driving Digital Operations with a Unified ERP Strategy',
                'excerpt_en' => 'Learn how unified ERP platforms connect teams, automate workflows, and surface insights that guide confident decisions.',
                'content_en' => <<<MARKDOWN
<p>Fragmented data slows growth. By centralizing finance, HR, inventory, and sales, leadership gains real-time visibility. Key actions include:</p>
<ol>
    <li>Mapping current workflows and bottlenecks</li>
    <li>Standardizing data models across departments</li>
    <li>Rolling out phased training to boost adoption</li>
    <li>Implementing analytics dashboards aligned with business KPIs</li>
</ol>
<p>The result? Faster cycles, clearer accountability, and adaptable operations that stay resilient under pressure.</p>
MARKDOWN,
                'title_ar' => 'قيادة العمليات الرقمية من خلال إستراتيجية ERP موحدة',
                'excerpt_ar' => 'تعرف على كيفية ربط المنصات الموحدة للـ ERP بين الفرق وأتمتة سير العمل وتوفير رؤى تدعم اتخاذ القرارات بثقة.',
                'content_ar' => <<<MARKDOWN
<p>إبطاء النمو هو نتيجة البيانات المجزأة. من خلال توحيد المالية والموارد البشرية والمخزون والمبيعات، يحصل القادة على رؤية فورية. تشمل الخطوات الرئيسية:</p>
<ol>
    <li>رسم خريطة لسير العمل الحالي ونقاط الاختناق</li>
    <li>توحيد نماذج البيانات عبر الأقسام</li>
    <li>تنفيذ تدريب تدريجي لتعزيز التبني</li>
    <li>تطبيق لوحات تحليلات متوافقة مع مؤشرات الأداء للأعمال</li>
</ol>
<p>النتيجة؟ دورات أسرع، ومسؤولية أوضح، وعمليات مرنة تتكيف مع الضغط.</p>
MARKDOWN,
            ],
            [
                'slug' => 'retail-analytics-insights',
                'featured_image' => 'https://images.unsplash.com/photo-1556740749-887f6717d7e4?auto=format&fit=crop&w=1200&q=80',
                'author_name' => 'Ahmed Khalifa',
                'read_time' => 4,
                'published_at' => '2024-08-18 10:15:00',
                'status' => Blog::STATUS_PUBLISHED,
                'is_featured' => false,
                'title_en' => 'Transforming Omnichannel Retail with Real-Time Analytics',
                'excerpt_en' => 'See how data-rich dashboards help retailers predict demand, personalize promotions, and optimize inventory at every location.',
                'content_en' => <<<MARKDOWN
<p>Retail teams thrive when insight replaces intuition. Deploying real-time analytics enables:</p>
<ul>
    <li>Smart replenishment rules for each store or warehouse</li>
    <li>Personalized campaigns triggered by customer journeys</li>
    <li>Granular profit tracking across categories and regions</li>
</ul>
<p>Organizations embracing analytics are delivering highly tailored experiences that convert browsers into loyal customers.</p>
MARKDOWN,
                'title_ar' => 'تحويل تجارة التجزئة متعددة القنوات باستخدام التحليلات الفورية',
                'excerpt_ar' => 'شاهد كيف تساعد لوحات البيانات الغنية تجار التجزئة على توقع الطلب وتخصيص العروض وتحسين المخزون في كل موقع.',
                'content_ar' => <<<MARKDOWN
<p>تزدهر فرق التجزئة عندما يحل التحليل محل الحدس. تمكّن التحليلات الفورية من:</p>
<ul>
    <li>قواعد تجديد ذكية لكل متجر أو مستودع</li>
    <li>حملات مخصصة يتم تفعيلها بحسب رحلة العميل</li>
    <li>تتبع ربحية دقيق عبر الفئات والمناطق</li>
</ul>
<p>الشركات التي تعتمد التحليلات تقدم تجارب مصممة بعناية تحول المتصفحين إلى عملاء أوفياء.</p>
MARKDOWN,
            ],
        ];

        foreach ($posts as $post) {
            $blog = Blog::updateOrCreate(
                ['slug' => $post['slug']],
                [
                    'slug' => $post['slug'],
                    'featured_image' => $post['featured_image'],
                    'author_name' => $post['author_name'],
                    'read_time_minutes' => $post['read_time'],
                    'published_at' => $post['published_at'],
                    'status' => $post['status'],
                    'is_featured' => $post['is_featured'],
                ]
            );

            BlogTranslation::updateOrCreate(
                ['blog_id' => $blog->id, 'locale' => 'en'],
                [
                    'title' => $post['title_en'],
                    'excerpt' => $post['excerpt_en'],
                    'content' => $post['content_en'],
                ]
            );

            BlogTranslation::updateOrCreate(
                ['blog_id' => $blog->id, 'locale' => 'ar'],
                [
                    'title' => $post['title_ar'],
                    'excerpt' => $post['excerpt_ar'],
                    'content' => $post['content_ar'],
                ]
            );
        }
    }
}
