<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Modules\Blogs\App\Models\Post;
use App\Models\User;

class BlogCommentTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_can_view_blog_index()
    {
        $post = Post::create([
            'title' => 'Sample',
            'slug' => 'sample-post',
            'excerpt' => 'excerpt',
            'content' => 'content',
            'published' => true,
            'published_at' => now(),
        ]);
        $this->get('/blogs')->assertStatus(200);
        $this->get('/blogs/'.$post->slug)->assertStatus(200);
    }
}
