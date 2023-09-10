<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Models\Category_quiz;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quiz = Quiz::all();
        // $request->session()->flush();

        return view('quiz.index', compact('quiz'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->input('category'));
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);
        $data =  Quiz::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'user_id' => Auth::id(),
        ]);

        Category_quiz::create([
            'quiz_id' => $data->id,
            'category_id' => $request->input('category')
        ]);
        return redirect()->route('question.create')->with('message_send', 'Your message has been sent');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $quiz = quiz::find($id);
        $questions = $quiz->quiz_question;
        $count = count($questions);
        $permissionCount = count($quiz->quiz_permission);
        return view('quiz.show', compact('quiz', 'questions', 'count', 'permissionCount'));
    }
    public function showQuestion(Request $request, $quiz_id, $question_id)
    {
        // $request->session()->flush();
        $session_id = $request->session()->get('question_id', 1);
        if ($session_id != $question_id) {
            return redirect()->route('quiz.question', ['quiz_id' => $quiz_id, 'question_id' => $session_id]);
        }
        $quiz = quiz::find($quiz_id);
        $question = $quiz->quiz_question()->where('question_id', $question_id)->get();

        return view('quiz.do_quiz', compact('quiz', 'question'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quiz $quiz)
    {
        $this->authorize('update', $quiz);
        $quiz->update([
            'public' => $request->input('public'),
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        $this->authorize('delete', $quiz);
        $quiz->delete();
        session()->forget('question_id');
        return redirect()->route('quiz.create');
    }
}
