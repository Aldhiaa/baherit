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
                'title' => 'MedFlow Systems: Digital Transformation',
                'industry' => 'healthcare',
                'description' => 'Complete modernization of legacy patient management system serving 50,000+ patients across 12 healthcare facilities. Achieved 40% reduction in administrative overhead and 99.9% uptime.',
                'challenge' => 'The client was using an outdated patient management system that was inefficient, prone to errors, and couldn\'t scale to meet growing demand. Administrative staff were spending excessive time on manual processes, and the system frequently crashed during peak hours.',
                'solution' => 'We designed and implemented a modern, cloud-based patient management system with real-time data synchronization, automated workflows, and mobile accessibility. The solution included patient registration, appointment scheduling, medical records management, billing integration, and reporting dashboards.',
                'results' => 'The new system reduced administrative overhead by 40%, improved data accuracy to 99.9%, and achieved 99.9% uptime. Patient wait times decreased by 35%, and staff productivity increased by 25%. The client was able to expand services to 3 additional facilities within the first year.',
                'metrics' => [
                    ['label' => 'Cost Reduction', 'value' => '40%'],
                    ['label' => 'Uptime', 'value' => '99.9%'],
                    ['label' => 'Patients', 'value' => '50K+']
                ],
                'image_url' => 'https://images.unsplash.com/photo-1666886573531-48d2e3c2b684',
                'is_featured' => true,
                'completed_at' => '2024-10-01'
            ],
            [
                'title' => 'FinTech SecurePay: Payment Platform',
                'industry' => 'finance',
                'description' => 'Development of a secure, high-performance payment processing platform handling 10,000+ transactions per second with 99.99% uptime and PCI DSS compliance.',
                'challenge' => 'The client needed a payment processing platform that could handle high transaction volumes while maintaining strict security standards and regulatory compliance. Existing solutions were too slow and lacked the necessary security features.',
                'solution' => 'We built a distributed payment processing system with microservices architecture, real-time fraud detection, end-to-end encryption, and automated compliance reporting. The platform was designed for horizontal scaling and included comprehensive monitoring and alerting.',
                'results' => 'The platform now processes over 10,000 transactions per second with 99.99% uptime. Security audits consistently show full compliance with PCI DSS requirements. Transaction processing time decreased by 60%, and fraud detection accuracy improved to 99.5%.',
                'metrics' => [
                    ['label' => 'Transactions', 'value' => '10K+/sec'],
                    ['label' => 'Uptime', 'value' => '99.99%'],
                    ['label' => 'Fraud Detection', 'value' => '99.5%']
                ],
                'image_url' => 'https://images.unsplash.com/photo-1551836022-d5d88e9218df',
                'is_featured' => false,
                'completed_at' => '2024-08-15'
            ],
            [
                'title' => 'RetailPro: E-commerce Platform',
                'industry' => 'retail',
                'description' => 'Custom e-commerce platform for multi-channel retail operations with inventory management, order processing, and customer analytics.',
                'challenge' => 'The client operated across multiple sales channels but lacked integration between their systems. This resulted in inventory discrepancies, delayed order fulfillment, and limited customer insights.',
                'solution' => 'We developed a unified e-commerce platform that integrated all sales channels, automated inventory management, streamlined order processing, and provided advanced customer analytics. The solution included real-time inventory tracking, automated reorder alerts, and personalized marketing tools.',
                'results' => 'Order processing time decreased by 50%, inventory accuracy improved to 99.8%, and customer satisfaction scores increased by 30%. The client saw a 25% increase in online sales and was able to expand to 2 new marketplaces.',
                'metrics' => [
                    ['label' => 'Order Processing', 'value' => '-50% time'],
                    ['label' => 'Inventory Accuracy', 'value' => '99.8%'],
                    ['label' => 'Sales Increase', 'value' => '25%']
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
