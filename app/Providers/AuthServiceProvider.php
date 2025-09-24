<?php

namespace App\Providers;

use App\Policies\CommentPolicy;
use App\Policies\PostPolicy;
use App\Policies\ReactionPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Modules\Blogs\App\Models\Comment;
use Modules\Blogs\App\Models\Post;
use Modules\Blogs\App\Models\Reaction;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Post::class => PostPolicy::class,
        Comment::class => CommentPolicy::class,
        Reaction::class => ReactionPolicy::class,
    ];

    public function boot(): void
    {
        $this->registerPolicies();
    }
}
