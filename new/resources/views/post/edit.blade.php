@props(['post'])
<x-layout>
    <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-6 text-center">Edit a Post</h1>
        <form action="{{route('post.update',$post)}}" method="post" class="space-y-4">
            @csrf
            @method('PUT')
            <div class="flex flex-col">
                <label for="title" class="mb-1 font-semibold text-gray-700">title</label>
                <input type="text" name="title" class="p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-slate-800" value="{{$post->title}}">
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="body" class="mb-1 font-semibold text-gray-700">body</label>
                <input type="text" name="body" class="p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-slate-800" value="{{$post->body}}">
                @error('body')
                    <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-slate-800 text-white py-2 px-4 rounded-md hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-800">Edit</button>
            </div>
        </form>
    </div>
</x-layout>