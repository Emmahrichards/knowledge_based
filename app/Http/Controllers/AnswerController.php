<?php

namespace App\Http\Controllers;


use App\Models\Answer; // Ensure this path is correct
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
class AnswerController extends Controller
{  // Display a listing of the answers
    public function index()
    {
        $answers = answer::all();
        return view('answers.index', compact('answers'));
    }

    // Show the form for creating a new answer
    public function create()
    {
        return view('answers.create');
    }

    // Store a newly created answer in storage
    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:255',
            // Add other validation rules as needed
        ]);

        Answer::create($request->all());
        return redirect()->route('answers.index');
    }

    // Display the specified answer
    public function show(Answer $answer)
    {
        return view('answers.show', compact('answer'));
    }

    // Show the form for editing the specified answer
    public function edit(Answer $answer)
    {
        return view('answers.edit', compact('answer'));
    }

    // Update the specified answer in storage
    public function update(Request $request, Answer $answer)
    {
        $request->validate([
            'text' => 'required|string|max:255',
            // Add other validation rules as needed
        ]);

        $answer->update($request->all());
        return redirect()->route('answers.index');
    }

    //Remove the specified answer from storage
    public function destroy(Answer $answer)
    {
        $answer->delete();
        return redirect()->route('answers.index');
    }
}
