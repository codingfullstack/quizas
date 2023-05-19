<?php

namespace App\Http\Controllers;

use App\Models\Quiz_permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizPermissionController extends Controller
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
        $request->validate([
            'quiz_id' => 'required',
        ]);
        if (Auth::check()) {
            Quiz_permission::create([
                'user_id' => Auth::id(),
                'quiz_id' => $request->input('quiz_id'),
                'is_correct' => 1,
            ]);
        } else {
            Quiz_permission::create([
                'session' => session()->getId(),
                'quiz_id' => $request->input('quiz_id'),
                'is_correct' => 1,
            ]);
        }

        return redirect()->route('quiz.question', ['quiz_id' => $request->input('quiz_id'), 'question_id' => 1]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz_permission $quiz_permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz_permission $quiz_permission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quiz_permission $quiz_permission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz_permission $quiz_permission)
    {
        //
    }
}
