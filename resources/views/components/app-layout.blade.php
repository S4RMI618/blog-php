<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | Posts</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        <nav class="bg-gray-800 text-white p-6">
            <ul class="flex justify-around">
                <li>
                    <a {{-- href="{{ route('home') }}" --}}>Home</a>
                </li>
                <li>
                    <a {{-- href="{{ route('posts') }}" --}}>Posts</a>
                </li>
                <li>
                    <a {{-- href="{{ route('contact') }}" --}}>Contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="grid place-items-center h-screen text-sm">
        {{$slot}}
    </div>
</body>

</html>
