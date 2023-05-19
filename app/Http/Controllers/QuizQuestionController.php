<?php

namespace App\Http\Controllers;

use App\Models\Quiz_question;
use Illuminate\Http\Request;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;

class QuizQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $quiz = quiz::where('user_id', Auth::id())->latest()->limit(1)->get('id');
        $id = $quiz[0]->id;
        return view('question.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'question' => 'required',
            'A' => 'required',
            'B' => 'required',
            'answer' => 'required',
        ]);

        if ($validatedData) {
            $question_id = $request->session()->get('question_id', 0);
            $question_id++;
            $request->session()->put('question_id', $question_id);
        }

        $quiz = Quiz::where('user_id', Auth::id())->latest()->first();
        $id = $quiz->id;
        quiz_question::create([
            'quiz_id' => $id,
            'question' => $request->input('question'),
            'question_id' => $question_id,
            'A' => $request->input('A'),
            'B' => $request->input('B'),
            'C' => $request->input('C'),
            'D' => $request->input('D'),
            'answer' => $request->input('answer'),
        ]);
        return redirect()->route('question.create');
    }


    /**
     * Display the specified resource.
     */
    public function show(Quiz_question $quiz_question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz_question $quiz_question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quiz_question $quiz_question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz_question $quiz_question)
    {
        //
    }
    public function quizCreateDone($id)
    {
        $data = quiz_question::where('quiz_id', $id)->count();
        // dd($data);
        if ($data <= 0) {
            return back()->with('error', 'Need more questions');
        } else {
            session()->forget('question_id');
            return redirect()->route('home');
        }
    }
}
