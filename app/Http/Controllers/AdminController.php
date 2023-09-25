<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Poll;
use App\Models\Quiz;
use App\Models\suspension;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('admin.index', compact('User', 'Blog', 'Quiz', 'Poll', 'BlogUsers', 'PollUsers', 'QuizUsers'));
    }
    public function usersList()
    {
        $Users = User::all();
        return view('admin.usersList', compact('Users'));
    }
    public function pollsList()
    {
        $Polls = Poll::with('user')->get();
        return view('admin.pollsList', compact('Polls'));
    }
    public function blogsList()
    {
        $Blogs = Blog::with('user')->paginate(10);
        return view('admin.blogsList', compact('Blogs'));
    }
    public function quizzesList()
    {
        $Quizzes = Quiz::with('user')->paginate(10);
        return view('admin.quizzesList', compact('Quizzes'));
    }
    public function changePermission($id)
    {
        $User = User::find($id);
        if ($User->is_admin === 1) {
            $User->is_admin = 0;
            $User->save();
        } else {
            $User->is_admin = 1;
            $User->save();
        };
        return redirect()->route('admin.users');
    }

    public function suspended(Request $request, $category, $id,)
    {
        $request->validate([
            'reason' => 'required|max:225',
            'check' => 'required'
        ]);
        $this->checkCategory($request, $category, $id);
        suspension::create([
            'quiz_id'=> $request->input('quiz_id'),
            'poll_id'=> $request->input('poll_id'),
            'blog_id'=> $request->input('blog_id'),
            'suspended_at' => now(),
            'category' =>$category,
            'reason' => $request->input('reason'),

        ]);
        DB::table($category)->where('id', $id)->update(['suspended'=> true]);
        return redirect()->back();

    }
    public function checkCategory(Request $request, $category, $id)
    {
        $request->merge([
            'poll_id' => null,
            'quiz_id' => null,
            'blog_id' => null,
        ]);
        if ($category == 'blogs') {
            $request->merge(['blog_id' => $id]);
        } elseif ($category == "polls") {
            $request->merge(['poll_id' => $id]);
        } else {
            $request->merge(['quiz_id' => $id]);
        }
    }
}
