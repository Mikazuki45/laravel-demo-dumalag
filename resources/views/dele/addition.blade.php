<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATOR</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
<h1 class="text-orange-500 text-xl font-bold ">THIS IS MY calculator </h1>
    <div class="mx-auto text-center bg-gray-200">
    
    <form action="{{route('callcalculate')}} " method="POST" class="mt-5" >
        @csrf
        <label for="num1">Number1</label>
        <input type="text" name="number1" id="num1"  autofocus>
        @if ($errors->has('number1'))
            <span class="text-danger">{{$errors->first('numer1')}}</span>
        @endif
        <br>
        <br>
        <label for="num2">Number2</label>
        <input type="text" name="number2" id="num2" >
        @if ($errors->has('number2'))
            <span class="text-danger">{{$errors->first('numer2')}}</span>
        @endif
        
        <br>
        <button type="submit" class="bg-blue-500 px-6 text-white hover:bg-gray-500 mt-5 mb-4" >ADD

        </button>
    </form>
    <h3 id="result"></h3>

    @if(isset($result))
                <h3 id="result">RESULT:{{$result}}</h3>
            
        @else
             <h3 id="result">SUM:NOT YET calculated</h3>
         
        @endif
    
</div>

<a href="{{route('operator')}}">BACK</a>
      



</body>
</html>