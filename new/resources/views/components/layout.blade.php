<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Your page description here">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-slate-800 text-white flex justify-between items-center p-4 shadow-lg">
        <a href="{{ route('home') }}" class="text-lg font-semibold hover:text-gray-300">Home</a>
        
        @auth
            <div x-data="{ open: false }" class="relative">
                <button aria-label="User profile" @click="open = !open" class="focus:outline-none">
                    
                    <img src="{{asset('storage/'.auth()->user()->image_path)}}" alt="{{auth()->user()->name}}" class="w-8 h-8 rounded-full">
                    
                    
                </button>
                <div x-show="open" @click.outside="open = false" class="absolute right-0 mt-2 w-48 bg-white text-gray-800 rounded-md shadow-lg py-2 z-10">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">{{ auth()->user()->name }}</a>
                    <a href="{{ route('view.dashboard') }}" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                    <form method="POST" action="{{route('logout')}}" class="block">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">Logout</button>
                    </form>
                </div>
            </div>
        @endauth
        
        @guest
            <nav>
                <ul class="flex space-x-8">
                    <li><a href="{{ route('view.Login') }}" class="hover:text-gray-300">Sign in</a></li>
                    <li><a href="{{ route('view.register') }}" class="hover:text-gray-300">Sign up</a></li>
                </ul>
            </nav>
        @endguest
    </header>

    <main class="container mx-auto p-4">
        {{ $slot }}
    </main>
</body>
</html>
