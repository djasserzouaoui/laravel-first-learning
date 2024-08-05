<x-layout>
    <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-6 text-center">Register A New User</h1>
        <form action="{{route('register')}}" method="post" class="space-y-4" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col">
                <label for="name" class="mb-1 font-semibold text-gray-700">Username</label>
                <input type="text" name="name" class="p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-slate-800">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="email" class="mb-1 font-semibold text-gray-700">Email</label>
                <input type="email" name="email" class="p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-slate-800">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="password" class="mb-1 font-semibold text-gray-700">Password</label>
                <input type="password" name="password" class="p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-slate-800">
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="password_confirmation" class="mb-1 font-semibold text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" class="p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-slate-800">
                @error('password_confirmation')
                    <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <input type="file" name="image">
                @error('image')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-slate-800 text-white py-2 px-4 rounded-md hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-800">Register</button>
            </div>
        </form>
    </div>
</x-layout>
