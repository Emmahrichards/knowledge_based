<!DOCTYPE html>
<html>
<head>
    <title>{{ $question->title }}</title>
</head>
<body>
    <h1>{{ $question->title }}</h1>
    <p>{{ $question->description }}</p>

    <h2>Answers</h2>
    <ul>
        @foreach($question->answers as $answer)
            <li>{{ $answer->answer_text }}</li>
        @endforeach
    </ul>

    <a href="{{ route('index.php') }}">Back to Questions</a>
</body>
</html>
