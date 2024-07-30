@extends('layout')

@section('content')
    <h1>Ask a Question</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('questions.store') }}">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <label for="body">Body</label>
        <textarea name="body" id="body"></textarea>
        <button type="submit">Submit</button>
    </form>
@endsection
