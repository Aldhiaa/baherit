<?php

namespace App\Policies;

use App\Models\User;
use Modules\Blogs\App\Models\Comment;

class CommentPolicy
{
    public function create(?User $user)
    {
        // allow guests but they require approval; authenticated can post
        return true;
    }

    public function moderate(User $user)
    {
        // stub: implement admin role check here
        return (bool) $user;
    }
}
