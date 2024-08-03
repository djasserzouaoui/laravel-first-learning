<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Your page description here">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-slate-800 text-white flex justify-between items-center p-4">
        <a href="{{route('home')}}" class="text-lg font-semibold hover:text-gray-300">Home</a>
        @auth
            <button aria-label="User profile">
                <img src="https://picsum.photos/200" alt="User profile picture" class="w-8 h-8 rounded-full">
            </button>
        @endauth
        @guest
            <nav class="flex space-x-8">
                <ul class="flex space-x-8">
                    <li class="list-none"><a href="{{route('view.Login')}}" class="hover:text-gray-300">Sign in</a></li>
                    <li class="list-none"><a href="{{route('view.register')}}" class="hover:text-gray-300">Sign up</a></li>
                </ul>
            </nav>
        @endguest
    </header>

    <main class="container mx-auto p-4">
        {{$slot}}
    </main>
</body>
</html>
