<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISCOUNT CALCULATOR</title>
</head>
<body>
<form action="{{ route('calculate.discount') }}" method="POST">
    @csrf
    <label for="num1">Number 1:</label>
    <input type="number" name="num1" id="num1"  required>
    <br>
    <br>
    <label for="select">select discount:</label>
    <br>
    <label for="senior">SENIOR:</label >
    <input type="checkbox" name="senior" >
    <br>
    <label for="senior">STUDENT:</label>
    <input type="checkbox" name="student" >
    <br>
    <br>
    <button type="submit" style="margin-left: 100px;">Calculate</button>

    @if($errors->any())
    <div>
        <h2>Errors:</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</form>

@if(isset($senior))
    <h2>Input Price:{{$num1}}</h2>
    <h2>Discount Criteria:{{$senior}} </h2>
    <h2><p>DISCOUNTED PRICE: {{ $result }}</p></h2>
@endif
    
</body>
</html>