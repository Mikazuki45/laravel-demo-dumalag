<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MULTIPLICATION</title>
</head>
<body>
<center>
<h1>MULTIPLICATION</h1>

<form action="{{ route('calculate.multiplication') }}" method="POST">
    @csrf
    <label for="num1">Number 1:</label>
    <input type="number" name="num1" id="num1"  required>
    <br>
    <br>
    <label for="num2">Number 2:</label>
    <input type="number" name="num2" id="num2"  required>
    <br>
    <br>
    <button type="submit" style="margin-left: 100px;">Calculate</button>
</form>

@if(isset($result))
    <h2><p>Result: {{ $result }}</p></h2>
@else
<h2><p style="color:red;">Result not yet calculated</p></h2>
@endif
<br>
        <a href="{{url('/main')}}">BACK</a>
</center>
</body>
</html>