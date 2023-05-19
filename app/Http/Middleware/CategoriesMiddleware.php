<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use App\Models\User;

class CategoriesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $categories = Category::all();
        $usersWithQuiz = User::has('quiz')->get();
        View::share('categories', $categories);
        View::share('usersWithQuiz', $usersWithQuiz);

        return $next($request);
    }
}
