<?php

namespace App\Policies;

use App\Models\User;
use Modules\Blogs\App\Models\Post;

class PostPolicy
{
    public function view(?User $user, Post $post)
    {
        return $post->published || ($user && $user->id === $post->user_id);
    }

    public function create(User $user)
    {
        // only authenticated users can create posts via admin normally; allow admins
        return (bool) $user;
    }

    public function update(User $user, Post $post)
    {
        return $user->id === $post->user_id;
    }

    public function publish(User $user)
    {
        // stub: later require specific role
        return (bool) $user;
    }
}
