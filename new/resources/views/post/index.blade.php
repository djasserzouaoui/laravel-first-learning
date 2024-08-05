<x-layout>
    <h1 class="text-2xl font-bold mb-6 text-center">Home Page</h1>
    <div class="space-y-4">
        @foreach ($posts as $post)
            <x-postcard :post="$post">
                <p class=" text-gray-700">Posted {{$post->created_at->diffForHumans()}}</p>
                <p class=" text-blue-600"> Created by {{$post->user->name}}</p>
            </x-postcard>
        @endforeach
    </div>

    <!-- Pagination Links -->
    <div class="mt-4">
        {{ $posts->links() }}
    </div>
</x-layout>