<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Poll;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index () {
        $User = User::count();
        $Blog = Blog::count();
        $Poll = Poll::count();
        $Quiz = Quiz::count();
        return view('Admin.index', compact('User', 'Blog', 'Quiz', 'Poll'));
    }
}
