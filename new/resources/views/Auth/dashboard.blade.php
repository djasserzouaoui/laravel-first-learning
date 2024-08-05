<x-layout>
    <h1 class="text-2xl font-bold mb-6 text-center">Dashboard</h1>

    @if (session('true'))
        <p class="text-green-600 mb-4">{{ session('true') }}</p>
    @endif

    <div class="flex justify-end mb-4">
        <a href="{{ route('post.create') }}">
            <button type="button" class="bg-slate-800 text-white py-2 px-4 rounded-md hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-800">
                Create a Post
            </button>
        </a>
    </div>

    <div class="space-y-4">
        @foreach ($posts as $post)
            <x-postcard :post="$post">
                <div class="flex justify-between items-center mt-2">
                    <a href="{{ route('post.edit',$post) }}">
                        <button type="button" class="bg-blue-500 text-white py-1 px-3 rounded-md hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Edit
                        </button>
                    </a>
                    <form action="{{ route('post.destroy', $post) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded-md hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-red-500">
                            Delete
                        </button>
                    </form>
                </div>
            </x-postcard>
        @endforeach
    </div>

    <!-- Pagination Links -->
    <div class="mt-4">
        {{ $posts->links() }}
    </div>
</x-layout>
