<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;

class FirstController extends Controller
{
    public function index()
    {
        $popBlogs = Blog::withCount('comment')->orderByDesc('comment_count')->limit(3)->get();
        $authors = User::withCount(['blogs', 'quiz', 'polls'])->get();

        foreach ($authors as $author) {
            $totalCount = $author->blogs_count + $author->quiz_count + $author->polls_count;
            $author->total_count = $totalCount;
        }
        $sortedAuthors = $authors->sortByDesc('total_count')->take(4);

        // dd($sortedAuthors);
        return view('first', compact('popBlogs', 'sortedAuthors'));
    }
}
