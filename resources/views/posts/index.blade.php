<x-app-layout>
    <h1 class="text-4xl">Here we will display all posts</h1>

    <a href="{{route('posts.create')}}">New Post</a>

    <div  class="flex flex-col justify-center items-center">
        <ul>
            @foreach ($posts as $post)
                <li class="hover:shadow-md hover:scale-105 hover:translate-x-4 transition duration-300 ease-in-out">
                    <a href="{{route('posts.show', $post)}}">
                        {{ $post->title }}
                    </a>
                </li>
            @endforeach
        </ul>

        {{ $posts->links() }}
    </div>
</x-app-layout>
