<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TeamMember;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teamMembers = [
            [
                'name' => 'Michael Chen',
                'position' => 'Chief Technology Officer',
                'bio' => 'Leading our technical vision with 15+ years of experience in enterprise software architecture and cloud technologies. Previously led engineering teams at Fortune 500 companies.',
                'image_url' => 'https://images.unsplash.com/photo-1573315094050-874c98e31f8d',
                'linkedin_url' => '#',
                'twitter_url' => '#',
                'is_featured' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'Sarah Rodriguez',
                'position' => 'Head of Product',
                'bio' => 'Driving product innovation with a focus on user experience and business impact. Expert in agile methodologies and digital transformation strategies.',
                'image_url' => 'https://images.unsplash.com/photo-1652841190565-b96e0acbae17',
                'linkedin_url' => '#',
                'twitter_url' => '#',
                'is_featured' => true,
                'sort_order' => 2
            ],
            [
                'name' => 'David Thompson',
                'position' => 'Director of Engineering',
                'bio' => 'Overseeing our engineering operations with expertise in scalable system design and DevOps practices. Passionate about building high-performance teams.',
                'image_url' => 'https://images.unsplash.com/photo-1603650664750-506f35f30760',
                'linkedin_url' => '#',
                'twitter_url' => '#',
                'is_featured' => true,
                'sort_order' => 3
            ],
            [
                'name' => 'Emily Johnson',
                'position' => 'Senior UX Designer',
                'bio' => 'Creating exceptional user experiences through research-driven design. Specializes in enterprise software and complex data visualization.',
                'image_url' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2',
                'linkedin_url' => '#',
                'twitter_url' => '#',
                'is_featured' => false,
                'sort_order' => 4
            ],
            [
                'name' => 'James Wilson',
                'position' => 'Cloud Solutions Architect',
                'bio' => 'Designing and implementing scalable cloud infrastructure solutions. AWS Certified Solutions Architect with expertise in multi-cloud strategies.',
                'image_url' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a',
                'linkedin_url' => '#',
                'twitter_url' => '#',
                'is_featured' => false,
                'sort_order' => 5
            ]
        ];

        foreach ($teamMembers as $member) {
            TeamMember::create($member);
        }
    }
}
