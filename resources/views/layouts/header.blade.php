<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between">
        
        <ul class="flex items-center">
            <li><a href="" class="p-3 text-2xl font-bold">Niyaj Ali</a></li>
            <li><a href="{{ route('home') }}" class="p-3">Home</a></li>
            <li><a href="" class="p-3">About</a></li>
            <li><a href="{{ route('posts') }}" class="p-3">Post</a></li>
        </ul>
        <ul class="flex items-center">
            @auth
                <li><a href="{{ route('dashboard') }}" class="p-3">{{ auth()->user()->name }}</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="p-3 inline">Logout</button>
                    </form>
                </li>
            @endauth
            
            @guest
                <li><a href="{{ route('login') }}" class="p-3">Login</a></li>
                <li><a href="{{ route('register') }}" class="p-3">Register</a></li>
            @endguest
               
                                   
            
        </ul>
    </nav>

    @yield('content')
</body>
</html>