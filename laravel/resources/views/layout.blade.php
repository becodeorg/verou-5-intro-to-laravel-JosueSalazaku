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
                <li><a href="{{ route('posts') }}">Bio</a></li>
                <li><a href="{{ route('species') }}">Explore Species</a></li>
                <li><a href="{{ route('form') }}">Subscribe</a></li>
            </ul>
        </header>
    @show

    <div class="min-h-screen">
        @yield('content')
    </div>

    <footer class="bg-sky-800 text-white flex flex-row justify-center mt-auto">Welcome to our universe</footer>
</body>
</html>
