<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;

class QuizPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function update(User $user, Quiz $quiz)
    {
     return  $quiz->user_id === auth()->id() || auth()->check() && $user->is_admin === 1;
    }
    public function delete(User $user, Quiz $quiz)
    {
     return auth()->check() && $quiz->user_id === auth()->id() || Auth::user()->is_admin;
    }
}
