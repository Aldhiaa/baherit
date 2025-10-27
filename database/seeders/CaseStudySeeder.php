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
                'title' => 'RioMarket Smart E Commerce Platform',
                'industry' => 'retail',
                'description' => 'A fully integrated e-commerce platform that represents an advanced model of smart commerce with an integrated Point of Sale (POS) system, interactive dashboard, intelligent order management, and advanced reporting tools.',
                'challenge' => 'In response to the rapid digital transformation, businesses needed a comprehensive e-commerce solution that could empower them in managing modern sales and marketing operations effectively. The challenge was to create a platform that prioritizes security, flexibility, and ease of use while providing advanced features.',
                'solution' => 'We developed RioMarket, a comprehensive digital ecosystem featuring an integrated Point of Sale (POS) system, an interactive dashboard, intelligent order management, and advanced reporting tools. The platform was designed with the latest web technologies, ensuring security, flexibility, and ease of use.',
                'results' => 'RioMarket successfully transformed how businesses manage their operations by providing a comprehensive digital ecosystem. The platform now serves multiple businesses with real-time performance tracking, intelligent order management, and advanced analytics to help decision-makers optimize performance and make data-driven decisions.',
                'metrics' => [
                    ['label' => 'Performance', 'value' => 'Real-time'],
                    ['label' => 'Order Management', 'value' => 'Intelligent'],
                    ['label' => 'Analytics', 'value' => 'Advanced']
                ],
                'image_url' => 'https://images.unsplash.com/photo-1666886573531-48d2e3c2b684',
                'is_featured' => true,
                'completed_at' => '2024-10-01'
            ],
            [
                'title' => 'Intelligents ERP System',
                'industry' => 'technology',
                'description' => 'A comprehensive ERP system that combines cloud power with full flexibility, providing a complete tool for business management with multi-branch and multi-warehouse support.',
                'challenge' => 'In today\'s fast-evolving business world, it became essential for businesses to manage their operations efficiently and ensure smooth processes across all departments and branches. The challenge was to create a system that provides access from anywhere without the need for special devices or complex installations.',
                'solution' => 'We designed Intelligents ERP, a system that combines cloud power with complete flexibility. The solution includes multi-branch and multi-warehouse support, user access permissions, inventory management, service management, HRM, CRM, comprehensive reporting, and a user-friendly interface.',
                'results' => 'Intelligents ERP became the ideal choice for businesses looking for an all-in-one solution to manage their operations with ease. The system offers an advanced, fully customizable platform tailored to business needs, helping manage operations efficiently and providing complete confidence in every aspect of the business.',
                'metrics' => [
                    ['label' => 'Branches', 'value' => 'Multi'],
                    ['label' => 'Flexibility', 'value' => 'Complete'],
                    ['label' => 'Customization', 'value' => 'Full']
                ],
                'image_url' => 'https://images.unsplash.com/photo-1551836022-d5d88e9218df',
                'is_featured' => true,
                'completed_at' => '2024-08-15'
            ],
            [
                'title' => 'Digital Transformation for Manufacturing Company',
                'industry' => 'manufacturing',
                'description' => 'Complete digital transformation solution for a manufacturing company with integrated inventory management, production tracking, and supply chain optimization.',
                'challenge' => 'The client was struggling with disconnected systems that led to inventory discrepancies, production delays, and limited visibility into their supply chain operations. Manual processes were time-consuming and error-prone.',
                'solution' => 'We implemented a unified digital platform that integrated all manufacturing processes, automated inventory management, streamlined production tracking, and provided real-time supply chain visibility. The solution included IoT sensors for equipment monitoring and predictive maintenance.',
                'results' => 'Production efficiency increased by 35%, inventory accuracy improved to 99.7%, and supply chain visibility enabled better decision-making. The client reduced operational costs by 20% and improved delivery times by 30%.',
                'metrics' => [
                    ['label' => 'Efficiency', 'value' => '+35%'],
                    ['label' => 'Inventory Accuracy', 'value' => '99.7%'],
                    ['label' => 'Cost Reduction', 'value' => '-20%']
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
