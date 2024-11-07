<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE - </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-sm w-full">
        <h2 class="text-2xl font-bold text-center mb-6">Welcome Back!</h2>
        <form action="{{route('gotodashboard')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" name="username" id="username" placeholder="Enter Username" required autofocus 
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter Password" required 
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-md shadow hover:bg-blue-600 transition duration-200">
                Login
            </button>
        </form>
        
        @if($errors->any())
            <div class="mt-4">
                <strong class="text-red-500">{{$errors->first()}}</strong>
            </div>
        @endif

        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">Don't have an account?</p>
            <a href="{{ route('signup_Form') }}" class="text-blue-500 hover:underline">Sign Up</a>
        </div>
    </div>
</body>
</html>
