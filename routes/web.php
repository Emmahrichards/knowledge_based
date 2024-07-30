use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;

Route::resource('questions', QuestionController::class);
Route::post('questions/{question}/answers', [AnswerController::class, 'store'])->name('answers.store');
