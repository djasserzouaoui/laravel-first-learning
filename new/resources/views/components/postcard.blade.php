@props(['post'])

<div class="border border-gray-300 p-4 my-2 rounded-lg shadow-md bg-gray-100">
    <p class="text-xl font-bold mb-2">{{ $post->title }}</p>
    {{$slot}}
    <p class="text-gray-700">{{ $post->body }}</p>
    
</div>
