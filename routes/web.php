<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Question; // Import the Question model

// Home route
Route::get('/dashboard', function () {
    return view('index');})->name('dashboard');


// Route to store a question
Route::post('store/question', [QuestionController::class, 'store'])->name('store.question');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Dashboard route
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    // Users route
    Route::get('/users', function () {
        return view('users');
    })->name('users');

    // Questions route
    Route::get('/questions', function () {
        $responses = Question::all(); // Fetch all questions from the database
        return view('question', ['responses' => $responses]);
    })->name('question');

    // Route for JSON responses to questions
    Route::post('question/responses', [QuestionController::class, 'questionJson'])->name('query.json');

    // Route for JSON user list
    Route::post('users/list', [AnswerController::class, 'usersJson'])->name('users.json');

    // Answers routes
    Route::get('/answers', [AnswerController::class, 'index'])->name('answers.index'); // List all answers
    Route::post('/answers', [AnswerController::class, 'store'])->name('answers.store'); // Store a new answer
    Route::get('/answers/{id}', [AnswerController::class, 'show'])->name('answers.show'); // Show a specific answer
    Route::put('/answers/{id}', [AnswerController::class, 'update'])->name('answers.update'); // Update an existing answer
    Route::delete('/answers/{id}', [AnswerController::class, 'destroy'])->name('answers.destroy'); // Delete an answer

    // Categories routes
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index'); // List all categories
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store'); // Store a new category
    Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show'); // Show a specific category
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update'); // Update an existing category
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy'); // Delete a category
});
