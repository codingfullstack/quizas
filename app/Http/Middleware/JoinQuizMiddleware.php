<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Quiz;
use App\Models\Quiz_permission;
use Illuminate\Support\Facades\Auth;

class JoinQuizMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $quizId = $request->route('quiz_id');
        $sessionID = session()->getId();
        $quiz = Quiz::find($quizId);
        $user = $request->user();
        if (Auth::check()) {
            $perm = $user->quiz_permission->where('quiz_id', $quizId);
            if ($quiz->public === 0 || count($perm) === 0) {
                abort(403);
            }
        }else{
           $existingPermission = Quiz_permission::where('session', $sessionID)
            ->where('quiz_id', $quizId)->get();
        }



        return $next($request);
    }
}
