<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page - Demo Middleware</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Log in</h1>
    <div class="mx-auto text-center">
        <form action="{{ route('login_Form')}}" method="POST">
            @csrf
            <input type="text"
                    name="username"
                    placeholder="Enter Username"
                    required autofocus><br>
            <input type="text"
                    name="password"
                    placeholder="Enter Password"
                    required autofocus><br>
            <button type="submit"
                    class="text-white border-black bg-blue-500 hover:bg-blue-500">
                Log In
            </button>
        </form>
        @if($errors->any())
            <div>
                <strong class="text-red-500">{{ $errors->first() }}</strong>
            </div>
        @endif
    </div>
</body>
</html>