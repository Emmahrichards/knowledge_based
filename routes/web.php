<?php

//use App\Http\Controllers\DashboardController;
//use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
//Route::get('/questions', [QuestionController::class, 'index'])->name('index.php');
Route::get('/', function () {
    return view('welcome');
});
