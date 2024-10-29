<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISCOUNT CALCULATOR</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <center>
    <h1>IT Equipment Discount Calculator: </h1>     
    <div>
        @csrf
        <form action="{{ route ('disccal') }}" method="POST"></a>
            <label for="num1"> Item Price: </label> <br>
            <input type="number" name="inputPrice" id="no1" autofocus> <br><br><br><br>

            <h2>Select Discount Criteria</h2>
            <label for="cheque1">Senior Citizen</label>
            <input type="checkbox" name="scbutt" id="scb"> <br>
            <label for="cheque2">Student</label>
            <input type="checkbox" name="stbutt" id="stb"> <br>

            <button type="submit">Calculate Discount</button>
        </form>
    </div>
    </center>
</body>
</html>