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
                'title' => 'Custom Software Development',
                'description' => 'Tailored applications built to your exact specifications and business requirements',
                'category' => 'development',
                'icon' => 'code',
                'features' => [
                    'Enterprise-grade architecture & scalability',
                    'Modern tech stack & best practices',
                    'Comprehensive testing & quality assurance'
                ],
                'timeline' => '3-12 months'
            ],
            [
                'title' => 'Web Applications',
                'description' => 'Scalable web platforms with modern architecture and responsive design',
                'category' => 'development',
                'icon' => 'web',
                'features' => [
                    'Progressive Web App (PWA) capabilities',
                    'Cross-browser compatibility & optimization',
                    'API integration & third-party services'
                ],
                'timeline' => '2-8 months'
            ],
            [
                'title' => 'Cloud Migration & Infrastructure',
                'description' => 'Seamless transition to cloud platforms with optimized performance and security',
                'category' => 'cloud',
                'icon' => 'cloud',
                'features' => [
                    'AWS, Azure, Google Cloud expertise',
                    'DevOps automation & CI/CD pipelines',
                    'Security compliance & monitoring'
                ],
                'timeline' => '1-6 months'
            ],
            [
                'title' => 'Digital Transformation Consulting',
                'description' => 'Strategic technology guidance and implementation roadmaps for business growth',
                'category' => 'consulting',
                'icon' => 'consulting',
                'features' => [
                    'Technology assessment & strategy',
                    'Process optimization & automation',
                    'Change management & training'
                ],
                'timeline' => '2-18 months'
            ],
            [
                'title' => 'Mobile Solutions',
                'description' => 'Native and cross-platform mobile applications for iOS and Android',
                'category' => 'development',
                'icon' => 'mobile',
                'features' => [
                    'React Native & Flutter development',
                    'App Store optimization & deployment',
                    'Push notifications & analytics'
                ],
                'timeline' => '3-9 months'
            ],
            [
                'title' => 'API Development & Integration',
                'description' => 'Robust APIs and seamless third-party integrations for connected systems',
                'category' => 'development',
                'icon' => 'api',
                'features' => [
                    'RESTful & GraphQL API design',
                    'Microservices architecture',
                    'Documentation & testing suites'
                ],
                'timeline' => '1-4 months'
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
