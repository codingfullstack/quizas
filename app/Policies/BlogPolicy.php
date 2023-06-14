<?php

namespace App\Policies;

use App\Models\Blog;
use App\Models\User;

class BlogPolicy
{
    /**
     * Create a new policy instance.
     */
    public function update(User $user, Blog $blog)
    {
     return auth()->check() &&  $blog->user_id === auth()->id();
    }
    public function delete(User $user, Blog $blog)
    {
     return auth()->check() && $blog->user_id === auth()->id();
    }
}
