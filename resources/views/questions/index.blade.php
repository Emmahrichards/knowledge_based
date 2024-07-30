@extends('layout')

@section('content')
    <h1>Questions</h1>
    <a href="{{ route('questions.create') }}">Ask a Question</a>
    <ul>
        @foreach($questions as $question)
            <li>
                <a href="{{ route('questions.show', $question->id) }}">{{ $question->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
