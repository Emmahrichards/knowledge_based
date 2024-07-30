<!DOCTYPE html>
<html>
<head>
    <title>Q&A System</title>
</head>
<body>
    <header>
        <h1>Q&A System</h1>
        <nav>
            <a href="{{ route('questions.index') }}">Home</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
