<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Include Bootstrap or your preferred CSS framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    @if(!Auth::check())
    <h1>You are not authenticated ,please login <a href="{{route(name: 'login-form)}}">LOGIN</a></h1>
    @else
    <h1>Welcome to Dashboard, {{Auth::user()->name}}</h1>
    <form method="POST" action="{{route(name:'logout') }}">
        @csrf
 
        <x-dropdown-link :href="route(name:'logout')"
            onclick="event.preventDefault();
                this.closet('form').submit();">
                {{__(key: 'Log Out') }}
</x-dropdown-link>
</form> 
@endif


</body>
</html>

    