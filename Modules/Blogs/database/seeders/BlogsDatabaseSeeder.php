<?php

namespace Modules\Blogs\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Blogs\App\Models\Post;

class BlogsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::truncate();

        Post::create([
            'title' => 'Welcome to our Blog',
            'slug' => 'welcome-to-our-blog',
            'excerpt' => 'Introductory post',
            'content' => '<p>This is the first blog post.</p>',
            'published' => true,
            'published_at' => now(),
        ]);
    }
}

