<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
        font-family: Arial, sans-serif;
        background-image: url('https://images.pexels.com/photos/2079438/pexels-photo-2079438.jpeg?auto=compress&cs=tinysrgb&w=600');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        text-align: center;
    }
    header {
        font-size: 2em;
        font-weight: 600;
        color: #333;
        margin-bottom: 30px;
        background-color: rgba(0, 123, 255, 0.8);
        color: #fff;
        padding: 15px 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .container {
        background-color: rgba(255, 255, 255, 0.9); /* Slight opacity for the container */
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        max-width: 400px;
        width: 100%;
    }
    h1 {
        font-size: 1.8em;
        color: #333;
        margin-bottom: 20px;
    }
    .input-group {
        margin-bottom: 15px;
        text-align: left;
    }
    label {
        display: block;
        font-size: 1em;
        color: #666;
        margin-bottom: 5px;
    }
    input[type="text"], input[type="password"] {
        width: 100%;
        padding: 10px;
        font-size: 1em;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 10px;
    }
    .error-message {
        color: red;
        font-size: 0.9em;
        margin-bottom: 15px;
    }
    .login-button {
        width: 100%;
        padding: 10px;
        font-size: 1.1em;
        color: #fff;
        background-color: #007BFF;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .login-button:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>
    <header>Product Management System</header>
    
    <div class="container">
        <h1>Login</h1>
        
        <!-- Check for error message -->
        @if(session('error'))
            <div class="error-message">{{ session('error') }}</div>
        @endif

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
    </div>
</body>
</html>
