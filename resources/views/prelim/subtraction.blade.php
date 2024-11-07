
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SubractionSansan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
    <div class="mx-auto text-center">
        <h1 class="font-bold mt-5">This is the Subraction Page</h1>
        <form action="{{ route('calculatesub') }}" class="mt-5" method="POST">
            @csrf
            <label class="mt-5" for="num1">Number 1:</label>
            <input type="text" name="number1" id="num1" required autofocus>
            @if ($errors->has('number1'))
                <span class="text-danger">{{ $errors->first('number1') }}</span>
            @endif
            <br>
            <div class="mt-4"></div>

            <label for="num2">Number 2:</label>
            <input type="text" name="number2" id="num2" required>
            @if ($errors->has('number2'))
                <span class="text-danger">{{ $errors->first('number2') }}</span>
            @endif
            <br>

            <button type="submit" class="mt-5 btn btn-primary">Calculate</button>
        </form>

        @if($result != null)
            <span class="text-xl">Difference: {{ $result }}</span>
        @endif
    </div>

</body>
</html>