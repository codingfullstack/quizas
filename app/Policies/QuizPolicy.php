<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Quiz;

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
     return  $quiz->user_id === auth()->id();
    }
    public function delete(User $user, Quiz $quiz)
    {
     return auth()->check() && $quiz->user_id === auth()->id();
    }
}
