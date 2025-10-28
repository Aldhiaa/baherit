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
                'name' => 'React',
                'category' => 'frontend',
                'description' => 'Component-based UI library for building interactive user interfaces with virtual DOM optimization.',
                'logo_url' => 'https://images.unsplash.com/photo-1650234083180-4b965afac328',
                'icon_class' => 'fab fa-react',
                'proficiency_level' => 95,
                'tags' => ['Hooks', 'Redux', 'Next.js'],
                'is_featured' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'Vue.js',
                'category' => 'frontend',
                'description' => 'Progressive framework for building user interfaces with excellent developer experience and performance.',
                'logo_url' => 'https://images.unsplash.com/photo-1669023414162-8b0573b9c6b2',
                'icon_class' => 'fab fa-vuejs',
                'proficiency_level' => 90,
                'tags' => ['Composition API', 'Nuxt.js', 'Vuex'],
                'is_featured' => true,
                'sort_order' => 2
            ],
            [
                'name' => 'Angular',
                'category' => 'frontend',
                'description' => 'Platform for building mobile and desktop web applications with TypeScript.',
                'logo_url' => 'https://images.unsplash.com/photo-1633356122102-3fe601e05bd2',
                'icon_class' => 'fab fa-angular',
                'proficiency_level' => 85,
                'tags' => ['TypeScript', 'RxJS', 'NgRx'],
                'is_featured' => true,
                'sort_order' => 3
            ],

            // Backend
            [
                'name' => 'Node.js',
                'category' => 'backend',
                'description' => 'JavaScript runtime built on Chrome\'s V8 JavaScript engine for scalable network applications.',
                'logo_url' => 'https://images.unsplash.com/photo-1635114332743-719b5e0702b9',
                'icon_class' => 'fab fa-node-js',
                'proficiency_level' => 95,
                'tags' => ['Express', 'NestJS', 'Socket.IO'],
                'is_featured' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'Python',
                'category' => 'backend',
                'description' => 'High-level programming language known for its simplicity and versatility in web development.',
                'logo_url' => 'https://images.unsplash.com/photo-1632571401005-458e9d24b6c5',
                'icon_class' => 'fab fa-python',
                'proficiency_level' => 90,
                'tags' => ['Django', 'Flask', 'FastAPI'],
                'is_featured' => true,
                'sort_order' => 2
            ],
            [
                'name' => 'Laravel',
                'category' => 'backend',
                'description' => 'The PHP framework for web artisans with elegant syntax and powerful features.',
                'logo_url' => 'https://images.unsplash.com/photo-1649820120053-9addb6b02b70',
                'icon_class' => 'fab fa-laravel',
                'proficiency_level' => 95,
                'tags' => ['Eloquent', 'Blade', 'Livewire'],
                'is_featured' => true,
                'sort_order' => 3
            ],

            // Cloud & DevOps
            [
                'name' => 'AWS',
                'category' => 'cloud',
                'description' => 'Amazon Web Services provides reliable, scalable, and inexpensive cloud computing services.',
                'logo_url' => 'https://images.unsplash.com/photo-1633356122544-f1575ac72d75',
                'icon_class' => 'fab fa-aws',
                'proficiency_level' => 90,
                'tags' => ['EC2', 'S3', 'Lambda', 'RDS'],
                'is_featured' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'Docker',
                'category' => 'cloud',
                'description' => 'Containerization platform that enables developers to package applications and dependencies.',
                'logo_url' => 'https://images.unsplash.com/photo-1633356122544-f1575ac72d75',
                'icon_class' => 'fab fa-docker',
                'proficiency_level' => 95,
                'tags' => ['Kubernetes', 'Compose', 'Swarm'],
                'is_featured' => true,
                'sort_order' => 2
            ],
            [
                'name' => 'Azure',
                'category' => 'cloud',
                'description' => 'Microsoft\'s cloud computing service for building, testing, deploying, and managing applications.',
                'logo_url' => 'https://images.unsplash.com/photo-1633356122544-f1575ac72d75',
                'icon_class' => 'fab fa-microsoft',
                'proficiency_level' => 85,
                'tags' => ['App Service', 'Functions', 'DevOps'],
                'is_featured' => true,
                'sort_order' => 3
            ],

            // Database
            [
                'name' => 'PostgreSQL',
                'category' => 'database',
                'description' => 'Powerful, open source object-relational database system with emphasis on extensibility and standards compliance.',
                'logo_url' => 'https://images.unsplash.com/photo-1633356122544-f1575ac72d75',
                'icon_class' => 'fas fa-database',
                'proficiency_level' => 95,
                'tags' => ['JSONB', 'PostGIS', 'Partitioning'],
                'is_featured' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'MongoDB',
                'category' => 'database',
                'description' => 'Document-oriented NoSQL database designed for ease of development and scaling.',
                'logo_url' => 'https://images.unsplash.com/photo-1633356122544-f1575ac72d75',
                'icon_class' => 'fas fa-leaf',
                'proficiency_level' => 90,
                'tags' => ['Aggregation', 'Replication', 'Sharding'],
                'is_featured' => true,
                'sort_order' => 2
            ],
            [
                'name' => 'Redis',
                'category' => 'database',
                'description' => 'In-memory data structure store, used as a database, cache and message broker.',
                'logo_url' => 'https://images.unsplash.com/photo-1633356122544-f1575ac72d75',
                'icon_class' => 'fas fa-bolt',
                'proficiency_level' => 85,
                'tags' => ['Pub/Sub', 'Transactions', 'Lua Scripting'],
                'is_featured' => true,
                'sort_order' => 3
            ],

            // Mobile
            [
                'name' => 'React Native',
                'category' => 'mobile',
                'description' => 'Framework for building native mobile applications using React and JavaScript.',
                'logo_url' => 'https://images.unsplash.com/photo-1633356122544-f1575ac72d75',
                'icon_class' => 'fab fa-react',
                'proficiency_level' => 90,
                'tags' => ['Expo', 'Redux', 'Navigation'],
                'is_featured' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'Flutter',
                'category' => 'mobile',
                'description' => 'Open-source UI software development kit created by Google for building natively compiled applications.',
                'logo_url' => 'https://images.unsplash.com/photo-1633356122544-f1575ac72d75',
                'icon_class' => 'fab fa-google',
                'proficiency_level' => 85,
                'tags' => ['Dart', 'Widgets', 'Firebase'],
                'is_featured' => true,
                'sort_order' => 2
            ]
        ];

        foreach ($technologies as $technology) {
            Technology::create($technology);
        }
    }
}