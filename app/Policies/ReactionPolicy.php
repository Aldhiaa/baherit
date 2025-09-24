<?php

namespace App\Policies;

use App\Models\User;
use Modules\Blogs\App\Models\Reaction;

class ReactionPolicy
{
    public function create(?User $user): bool
    {
        return (bool) $user;
    }

    public function update(User $user, Reaction $reaction): bool
    {
        return $reaction->user_id === $user->id;
    }

    public function delete(User $user, Reaction $reaction): bool
    {
        return $reaction->user_id === $user->id;
    }
}
