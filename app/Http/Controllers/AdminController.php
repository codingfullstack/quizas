<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Poll;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $User = User::count();
        $Blog = Blog::count();
        $Poll = Poll::count();
        $Quiz = Quiz::count();
        $BlogUsers = Blog::with('user')->latest()->limit(5)->get();
        $PollUsers = Poll::with('user')->latest()->limit(5)->get();
        $QuizUsers = Quiz::with('user')->latest()->limit(5)->get();
        return view('Admin.index', compact('User', 'Blog', 'Quiz', 'Poll', 'BlogUsers', 'PollUsers', 'QuizUsers'));
    }
    public function usersList()
    {
        $Users = User::all();
        return view('admin.usersList', compact('Users'));
    }
    public function changePermission($id)
    {

        $User = User::find($id);
        if( $User->is_admin === 1){
            $User->is_admin = 0;
            $User->save();
        }else{
            $User->is_admin = 1;
            $User->save();
        };
        return redirect()->route('admin.users');
    }
}
