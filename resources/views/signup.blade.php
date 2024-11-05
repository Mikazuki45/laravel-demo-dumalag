<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-sm w-full">
        <h2 class="text-2xl font-bold text-center mb-6">SIGN UP</h2>
        <form action="{{route('register')}}" method="POST" >
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input value="{{old('name')}}" autocomplete="name" type="text" name="name" id="name" placeholder="Enter name" required autofocus 
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />            
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                <input value="{{old('email')}}" autocomplete="email" type="text" name="email" id="email" placeholder="Enter Email" required autofocus 
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            <br>


            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter Password" required 
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />    
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"  placeholder="Confirm Password" required autofocus 
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-md shadow hover:bg-blue-600 transition duration-200">
                CREATE ACCOUNT
            </button>
            <p style="display: flex; align-items: center; white-space: nowrap;">
    Already registered?
    <a href="{{ route('login1') }}" class="text-blue-500 hover:underline" style="margin-left: 130px;">LOGIN</a>
</p>
           
        </form>
        
        @if($errors->any())
            <div class="mt-4">
                <strong class="text-red-500">{{$errors->first()}}</strong>
            </div>
        @endif

       
    </div>
</body>
</html>
