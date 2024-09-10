<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="mx-auto text-center bg-green-200">
    <h1 class="font-bold mt-2">My Calculator</h1>
    <br>
    <form action="{{ route('callcalculate') }}" method="POST" class="mt-5">
        @csrf
        <label class="mt-5" for="num1">Number 1</label>
        <input type="text" name="number1" id="num1" required autofocus>
        @if ($errors->has('number1'))
            <span class="text-danger">{{ $errors->first('number1') }}</span>
        @endif
        <br>
        <div class="mt-4"></div>
        <label for="num2">Number 2</label>
        <input type="text" name="number2" id="num2" required>
        @if ($errors->has('number2'))
            <span class="text-danger">{{ $errors->first('number2') }}</span>
        @endif
        <br>
        <br>
        <button type="submit" class="bg-blue-500 text-center px-4 text-white 
        hover:bg-red-800 mt-5 mb-4">
            calculate
        </button>
    </form>
    <h3 class="text-xl">Result: </h3>
</div>
    @if($result != null)
        <span class="text-x1">SUM: {{ $result }}</span>
    @else
        <span class="text-x1">SUM: Not yet Calculated!</span>
    @endif
</body>
</html>