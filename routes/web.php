<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizQuestionController;
use App\Http\Controllers\QuizPermissionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\PollController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FirstController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// ------QUIZ--------
Route::middleware('JoinQuiz')->group(function () {
    Route::get('/quiz/{quiz_id}/question/{question_id}', [QuizController::class, 'showQuestion'])
        ->name('quiz.question');
    Route::post('quiz/{quiz_id}/question/{question_id}', [AnswerController::class, 'postQuestion'])
        ->name('quiz.post');
});
Route::post('/clear-session/{id}', [AnswerController::class, 'cancelQuiz'])->name('clear-session');
Route::middleware('quizCheck')->group(function () {
Route::get('/', [FirstController::class, 'index'])->name('home');
// ---------PERMISSION----------
Route::resource('/permission', QuizPermissionController::class);

// -------SESIONS----------

Route::post('quiz-create-done/{id}', [QuizQuestionController::class, 'quizCreateDone'])
    ->name('quiz.create.done');

    // -------ANSWER AND REZULT---------
Route::get('/quiz/rezult/{id}', [AnswerController::class, 'calculatePercentage'])
    ->name('quiz.answer');
Route::resource('/answer', AnswerController::class)
    ->except(['store']);

    // ----------FILTER---------
Route::get('/category/{category}', [HomeController::class, 'categoryFilter'])
    ->name('home.category');
Route::get('/search', [HomeController::class, 'filter'])
    ->name('search');

Route::get('/poll', [PollController::class, 'index'])->name('poll.index');
Route::middleware('auth')->group(function () {
    Route::get('/poll/create', [PollController::class, 'create'])->name('poll.create');
    Route::post('/poll/store', [PollController::class, 'store'])->name('poll.store');

    Route::resource('/blog', BlogController::class)->except(['index', 'show']);

    Route::resource('/question', QuizQuestionController::class);
    Route::resource('/quiz', QuizController::class)->except(['index', 'show']);
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});
// -------------- ONLY --------------
Route::resource('quiz', QuizController::class)->only(['index', 'show']);
Route::resource('/blog', BlogController::class)->only(['index', 'show']);
});




require __DIR__ . '/auth.php';
