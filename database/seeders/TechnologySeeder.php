<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            // Frontend
            [
                'name' => 'React Native',
                'category' => 'mobile',
                'description' => 'Framework for building native mobile applications using React and JavaScript for high-performance cross-platform apps.',
                'logo_url' => 'https://images.unsplash.com/photo-1633356122544-f1575ac72d75',
                'proficiency_level' => 90,
                'tags' => ['Mobile', 'Cross-platform', 'JavaScript'],
                'is_featured' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'Flutter',
                'category' => 'mobile',
                'description' => 'Open-source UI software development kit created by Google for building natively compiled applications for mobile, web, and desktop.',
                'logo_url' => 'https://images.unsplash.com/photo-1633356122544-f1575ac72d75',
                'proficiency_level' => 85,
                'tags' => ['Dart', 'Cross-platform', 'UI'],
                'is_featured' => true,
                'sort_order' => 2
            ],
            [
                'name' => 'Laravel',
                'category' => 'backend',
                'description' => 'The PHP framework for web artisans with elegant syntax and powerful features for website development.',
                'logo_url' => 'https://images.unsplash.com/photo-1649820120053-9addb6b02b70',
                'proficiency_level' => 95,
                'tags' => ['PHP', 'Eloquent', 'Blade'],
                'is_featured' => true,
                'sort_order' => 3
            ],

            // Backend
            [
                'name' => 'WordPress',
                'category' => 'backend',
                'description' => 'Content management system for website development with extensive plugin ecosystem and theme customization.',
                'logo_url' => 'https://images.unsplash.com/photo-1633356122544-f1575ac72d75',
                'proficiency_level' => 90,
                'tags' => ['CMS', 'PHP', 'Plugins'],
                'is_featured' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'HTML/CSS/JavaScript',
                'category' => 'frontend',
                'description' => 'Core web technologies for frontend development with responsive design and modern user interfaces.',
                'logo_url' => 'https://images.unsplash.com/photo-1633356122544-f1575ac72d75',
                'proficiency_level' => 95,
                'tags' => ['Frontend', 'Responsive', 'UI'],
                'is_featured' => true,
                'sort_order' => 1
            ],

            // Cloud & DevOps
            [
                'name' => 'Cloud Hosting',
                'category' => 'cloud',
                'description' => 'Reliable and scalable cloud hosting solutions with 24/7 technical support for uninterrupted service.',
                'logo_url' => 'https://images.unsplash.com/photo-1633356122544-f1575ac72d75',
                'proficiency_level' => 90,
                'tags' => ['Hosting', 'Scalability', 'Support'],
                'is_featured' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'SSL Certificates',
                'category' => 'security',
                'description' => 'Secure data protection through SSL certificate management for websites and applications.',
                'logo_url' => 'https://images.unsplash.com/photo-1633356122544-f1575ac72d75',
                'proficiency_level' => 85,
                'tags' => ['Security', 'Encryption', 'Certificates'],
                'is_featured' => true,
                'sort_order' => 2
            ],

            // Database
            [
                'name' => 'MySQL',
                'category' => 'database',
                'description' => 'Popular open-source relational database management system used in web applications.',
                'logo_url' => 'https://images.unsplash.com/photo-1633356122544-f1575ac72d75',
                'proficiency_level' => 90,
                'tags' => ['Database', 'SQL', 'Open-source'],
                'is_featured' => true,
                'sort_order' => 1
            ],

            // Security
            [
                'name' => 'Cybersecurity',
                'category' => 'security',
                'description' => 'Comprehensive security solutions including system protection against cyberattacks and firewall management.',
                'logo_url' => 'https://images.unsplash.com/photo-1633356122544-f1575ac72d75',
                'proficiency_level' => 95,
                'tags' => ['Protection', 'Firewall', 'Audits'],
                'is_featured' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'Network Management',
                'category' => 'infrastructure',
                'description' => 'Design and implementation of network infrastructure for efficient connectivity with performance monitoring.',
                'logo_url' => 'https://images.unsplash.com/photo-1633356122544-f1575ac72d75',
                'proficiency_level' => 90,
                'tags' => ['Infrastructure', 'Monitoring', 'Troubleshooting'],
                'is_featured' => true,
                'sort_order' => 1
            ],

            // Smart Home
            [
                'name' => 'Smart Home Systems',
                'category' => 'iot',
                'description' => 'Installation of smart doors, intercom systems, surveillance cameras, and alarm systems with mobile integration.',
                'logo_url' => 'https://images.unsplash.com/photo-1633356122544-f1575ac72d75',
                'proficiency_level' => 85,
                'tags' => ['IoT', 'Security', 'Integration'],
                'is_featured' => true,
                'sort_order' => 1
            ]
        ];

        foreach ($technologies as $technology) {
            Technology::create($technology);
        }
    }
}
