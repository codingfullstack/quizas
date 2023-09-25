<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class suspendedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $path = $request->path();
        $parts = explode('/', $path);
        $category = $parts[0];
        if ($request->$category->suspended && Auth::id() == $request->$category->user_id && !Auth::user()->is_admin) {
            return $next($request);
        }elseif($request->$category->suspended && !auth()->check()){
            return redirect()->back();
        }elseif($request->$category->suspended && !Auth::user()->is_admin){
            return redirect()->back();
        }elseif($request->$category->suspended && !Auth::id() == $request->$category->user_id){
            return redirect()->back();
        }
        return $next($request);
    }
}
