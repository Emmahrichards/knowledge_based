<?php

namespace App\Http\Controllers;

use App\Models\Question; // Assuming you have a Question model
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class QuestionController extends Controller
{
    /**
     * Display a listing of questions.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $questions = Question::all(); // Fetch all questions
        return view('questions.index', compact('questions')); // Return a view with questions
    }

    /**
     * Show the form for creating a new question.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('questions.create'); // Return the form view
    }

    /**
     * Store a newly created question in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        Question::create($request->all()); // Create a new question

        return redirect()->route('questions.index')->with('success', 'Question created successfully.');
    }

    /**
     * Display the specified question.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $question = Question::findOrFail($id); // Fetch the question by ID
        return view('questions.show', compact('question')); // Return the question view
    }

    /**
     * Show the form for editing the specified question.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $question = Question::findOrFail($id); // Fetch the question by ID
        return view('questions.edit', compact('question')); // Return the edit form
    }

    /**
     * Update the specified question in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $question = Question::findOrFail($id); // Fetch the question by ID
        $question->update($request->all()); // Update the question

        return redirect()->route('questions.index')->with('success', 'Question updated successfully.');
    }

    /**
     * Remove the specified question from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id); // Fetch the question by ID
        $question->delete(); // Delete the question

        return redirect()->route('questions.index')->with('success', 'Question deleted successfully.');
    }

    /**
     * Handle JSON responses for questions.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function questionJson()
    {
        $questions = Question::all(); // Fetch all questions
        return response()->json($questions); // Return JSON response
    }
}
