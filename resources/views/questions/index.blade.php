<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <!-- Include Bootstrap CSS (optional for styling) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .welcome-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-card">
            <h1 class="text-center">Welcome to the Dashboard</h1>
            <p class="text-center">Here you can manage your knowledge base and view important information.</p>
            <div class="text-center">
                <a href="{{ route('dashboard') }}" class="btn btn-primary">View Questions</a>
                <!-- Add more buttons or links as needed -->
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (optional for styling) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
