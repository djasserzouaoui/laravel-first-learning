<x-layout>
    <h1 class="text-2xl font-bold mb-6 text-center">Dashboard</h1>

    @if (session('true'))
        <p class="text-green-600 mb-4">{{ session('true') }}</p>
    @endif

    <a href="{{ route('post.create') }}">
        <button type="button" class="bg-slate-800 text-white py-2 px-4 rounded-md hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-800">Create a Post</button>
    </a>

    @foreach ($posts as $post)
        <x-postcard :post="$post"/>
    @endforeach

    <!-- Pagination Links -->
    <div class="mt-4">
        {{ $posts->links() }}
    </div>
</x-layout>
