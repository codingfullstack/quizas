<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

    }
    public function categoryFilter($category)
    {
        $categories = Category::find($category);
        $quiz = $categories->quizzes;
        return view('home.filterCategory', compact('quiz'));
    }
    public function filter(Request $request)
    {
        $id = $request->input('category');
        $description = $request->input('search');
        $authorName = $request->input('author');

        $quizzes = Quiz::query();

        if (!empty($authorName)) {
            $quizzes->whereHas('user', function ($query) use ($authorName) {
                $query->where('users.id', $authorName);
            });
        }

        if (!empty($id)) {
            $quizzes->whereHas('categories', function ($query) use ($id) {
                $query->where('categories.id', $id);
            });
        }

        if (!empty($description)) {
            $quizzes->where('description', 'LIKE', "%$description%");
        }

        $quizzes = $quizzes->get();

        return view('home.search', compact('quizzes'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
