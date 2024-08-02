<x-layout>
    <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-6 text-center">Login User</h1>
        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf
            <div class="flex flex-col">
                <label for="email" class="mb-1 font-semibold text-gray-700">Email</label>
                <input type="text" name="email" class="p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-slate-800">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="password" class="mb-1 font-semibold text-gray-700">Password</label>
                <input type="password" name="password" class="p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-slate-800">
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <label class="flex items-center text-gray-700">
                    <input type="checkbox" name="remember" class="mr-2">
                    Remember Me
                </label>
                <a href="#" class="text-sm text-slate-800 hover:underline">Forgot Password?</a>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-slate-800 text-white py-2 px-4 rounded-md hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-800">Login</button>
            </div>
            @if (session('error'))
                <div class="mt-4 text-center">
                    <p class="text-red-500">{{ session('error') }}</p>
                </div>
            @endif
        </form>
    </div>
</x-layout>

