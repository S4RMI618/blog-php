<x-app-layout>
    <div class="max-w-4xl mx-auto p-6 bg-blue-200 shadow-lg rounded-lg">
        <a href="{{route('posts.index')}}" class="text-blue-600 hover:text-blue-800 underline mb-4 inline-block">
            ← Back to all posts
        </a>

        <h1 class="text-4xl font-bold text-blue-900 mb-6">{{ $post->title }}</h1>

        <div class="flex flex-col items-start gap-4">
            <p class="text-gray-700 text-lg">{{ $post->content }}</p>

            <div class="text-gray-500">
                <p><strong>Category:</strong> {{ $post->category }}</p>
                <p><strong>Created at:</strong> {{ $post->created_at }}</p>
                <p><strong>Updated at:</strong> {{ $post->updated_at }}</p>
            </div>

            <div class="flex gap-4 mt-4 items-center justify-around w-full">
                <a href="{{route('posts.edit', $post)}}"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                    Edit Post
                </a>
                <form action="{{route('posts.destroy', $post)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
