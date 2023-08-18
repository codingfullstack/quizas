<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = session()->get('answers');
        // dd($data);
        $count = count($data);
        for ($i = 0; $i < $count; $i++) {
            Answer::create([
                'question_id' => $data[$i]['question_id'],
                'quiz_id' => $data[$i]['quiz_id'],
                'user_id' => $data[$i]['user_id'],
                'is_correct' => $data[$i]['answer'],
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Answer $answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Answer $answer)
    {
        //
    }
    public function cancelquiz(Request $request,  $id)
    {
        $quiz = Quiz::find($id);

        $permission = $quiz->quiz_permission;
        // dd($permission);
        $permission[0]->delete();
        session()->forget(['question_id', 'answers', 'quizProgress']);
        return redirect()->route('home');
    }
    public function postQuestion(Request $request, $quiz_id, $question_id)
    {
        $quiz = quiz::find($quiz_id);
        $session_id = $request->session()->get('question_id', $question_id);
        $session_id++;
        $request->session()->put('question_id', $session_id);
        $this->sessionPush($request, $question_id, $quiz);
        // dd(session()->get('quizProgress'));
        $count = $quiz->quiz_question()->count();
        if ($count >= $session_id) {
            return redirect()->route('quiz.question', ['quiz_id' => $quiz_id, 'question_id' => $session_id]);
        } else {
            if (auth()->check()) {
            $this->store($request);
            }
            $request->session()->forget(['quizProgress']);
            $request->session()->forget(['question_id']);
            return redirect()->route('quiz.answer', ['id' => $quiz_id]);
        }
    }
    public function sessionPush(Request $request, $question_id, $quiz)
    {
        $data = $quiz->quiz_question()->where('question_id', $question_id)->get();
        $request->validate(['answer' => 'required']);
        $answers = session()->get('answers', []);
        $newAnswer = ['question_id' => $data[0]->id, 'quiz_id' => $data[0]->quiz_id, 'answer' =>  $this->answer($request, $question_id,  $data[0]->quiz_id), 'user_id' => $this->user(),];
        array_push($answers, $newAnswer);
        session()->put('answers', $answers);
    }
    public function answer(Request $request, $question_id,  $quiz_id)
    {
        $quiz = Quiz::find($quiz_id);
        $data = $quiz->quiz_question()->where('question_id', $question_id)->get();
        return $data[0]->answer == $request->input('answer');
    }
    public function user()
    {
        if (Auth::id()) {
            $user_id = Auth::id();
        } else {
            $user_id = null;
        }
        return $user_id;
    }
    public function calculatePercentage(Request $request, $quiz_id)
    {
        $data = session()->get('answers');
        $allQuestions = count($data);
        $correctAnswers = array_filter($data, function($answer) {
            return $answer['answer'] === true;
        });
        if ($allQuestions > 0) {
            $percentage = round((count($correctAnswers) / $allQuestions) * 100, 2);
            $request->session()->forget(['answers']);
            return view('quiz.quiz_Done', compact('percentage'));
        } else {
            return 0;
        }
    }
}
