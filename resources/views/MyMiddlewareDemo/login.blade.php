<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page - Demo Middleware</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background-color: #f0f4f8;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full">
        <h1 class="text-2xl font-bold text-center mb-6">Log in</h1>
        <form action="{{ route('login_Form')}}" method="POST">
            @csrf
            <div class="mb-4">
                <input type="text"
                       name="username"
                       placeholder="Enter Username"
                       required
                       autofocus
                       class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <input type="password"
                       name="password"
                       placeholder="Enter Password"
                       required
                       class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit"
                    class="w-full text-white bg-blue-500 hover:bg-blue-600 font-semibold py-2 rounded transition duration-200">
                Log In
            </button>
        </form>
        @if($errors->any())
            <div class="mt-4">
                <strong class="text-red-500 text-center block">{{ $errors->first() }}</strong>
            </div>
        @endif
    </div>
</body>
</html>
