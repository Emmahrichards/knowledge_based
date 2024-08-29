<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
Route::get('/questions', [QuestionController::class, 'index'])->name('index.php');
