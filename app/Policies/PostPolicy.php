<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        //
    }

    public function view(?User $user, Post $post): bool
    {
        if ($post->published()) {
            return true;
        }

        // Visitors cannot view unpublished items
        if ($user === null) {
            return false;
        }

        // Admin overrides published status
        if ($user->hasRole(['editor', 'admin'])) {
            return true;
        }

        // Authors can view their own unpublished posts
        return $user->id == $post->user_id;
    }

    public function create(User $user): bool
    {
        if ($user->hasRole(['author', 'editor', 'admin'])) {
            return true;
        }
    }

    public function update(User $user, Post $post): bool
    {
        if ($user->hasRole(['author'])) {
            return $user->id == $post->user_id;
        }

        if ($user->hasRole(['editor', 'admin'])) {
            return true;
        }
    }

    public function delete(User $user, Post $post): bool
    {
        if ($user->hasRole(['author'])) {
            return $user->id == $post->user_id;
        }

        if ($user->hasRole(['editor', 'admin', 'Super-Admin'])) {
            return true;
        }

        return false;
    }

    public function restore(User $user, Post $post): bool
    {
    }

    public function forceDelete(User $user, Post $post): bool
    {
    }
}
