<x-app-layout>
    <div class="max-w-4xl mx-auto p-6 bg-blue-200 shadow-lg rounded-lg">
        <h1 class="text-3xl font-bold text-blue-900 mb-6">Edit Post</h1>

        <div class="bg-blue-100 p-6 rounded-lg shadow-md">

            <form action="{{route('posts.update', $post)}}" method="POST" class="flex flex-col gap-4">
                @csrf
                @method('PUT')

                <div>
                    <label for="title" class="block text-blue-900 font-semibold mb-1">Post Title:</label>
                    <input type="text" name="title" id="title" value="{{ $post->title }}" 
                           class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-600 focus:outline-none">
                </div>

                <div>
                    <label for="category" class="block text-blue-900 font-semibold mb-1">Post Category:</label>
                    <input type="text" name="category" id="category" value="{{ $post->category }}" 
                           class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-600 focus:outline-none">
                </div>

                <div>
                    <label for="content" class="block text-blue-900 font-semibold mb-1">Post Content:</label>
                    <textarea id="content" name="content" rows="6" 
                              class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-600 focus:outline-none">{{ $post->content }}</textarea>
                </div>

                <button type="submit" class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 transition duration-300 ease-in-out">
                    Update Post
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
