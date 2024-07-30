@extends('layout')

@section('content')
    <h1>{{ $question->title }}</h1>
    <p>{{ $question->body }}</p>

    <h2>Answers</h2>
    <ul>
        @foreach($question->answers as $answer)
            <li>{{ $answer->body }}</li>
        @endforeach
    </ul>

    <h2>Add an Answer</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('answers.store', $question->id) }}">
        @csrf
        <textarea name="body" id="body"></textarea>
        <button type="submit">Submit</button>
    </form>
@endsection
