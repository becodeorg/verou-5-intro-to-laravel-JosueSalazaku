<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    @section('nav')
        <header class="p-8 bg-slate-900 text-white text-xl">
            <ul class="flex flex-row justify-around">
                <li class="font-bold"><a href="{{ route('home') }}">Xenopedia</a></li>
                <li><a href="{{ route('posts') }}">Go to Posts</a></li>
                <li><a href="{{ route('species') }}">Explore Species</a></li>
                <li><a href="{{ route('form') }}">Subscribe</a></li>
            </ul>
        </header>
    @show

    <div>
        @yield('content')
    </div>
</body>
</html>
