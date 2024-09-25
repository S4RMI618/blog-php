<x-app-layout>
    <h1>Create a new Post</h1>
    <div class="bg-blue-300 p-6 rounded-sm">
        <form action="{{route('posts.store')}}" method="POST" class="flex flex-col gap-3">
            @csrf
            <label for="title">Post Title:
                <input type="text" name="title" id="title">
            </label>
            
            <label for="category">Post Category:
                <input type="text" name="category" id="category">
            </label>
        
            <label for="content">Post Content:</label>
            <textarea id="content" name="content"></textarea> 
        
            <button type="submit" class="bg-blue-900 text-white hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-opacity-50 font-semibold py-2 px-4 rounded-lg transition duration-300 ease-in-out">
                Create Post
            </button>
        </form>
        
    </div>
</x-app-layout>