<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(!Auth::check())
        <h1>You are not authenticated, please login <a href="{{route('login')}}">LOGIN</a></h1>
    @else
        <h1>Welcome to Dashboard, {{ Auth::user()->name }}</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out')}}
            </x-dropdown-link>
        </form>
    @endif
</body>
</html>