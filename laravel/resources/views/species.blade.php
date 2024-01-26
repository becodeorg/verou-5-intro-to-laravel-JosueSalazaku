<?php require '/Applications/XAMPP/xamppfiles/htdocs/php/verou-5-intro-to-laravel-JosueSalazaku/laravel/routes/aliens.php'; ?>

@extends('layout')
<!-- @section('nav')
    @parent

    <!-- Additional content specific to the 'species.blade.php' view -->
    <main class="flex flex-col bg-indigo-400 min-h-screen">

    <section class="flex-grow">
        @foreach ($alienSpecies as $alien)
            <article class="mt-8 mx-20 mb-20">
                <h2 class="font-bold text-white text-xl">{{ $alien['name'] }}</h2>
                <p class="text-white">Type: {{ $alien['type'] }}</p>
                <p class="text-blue-800">Solar System: {{ $alien['solar_system'] }}</p>
            </article>
        @endforeach
    </section>

    <footer class="bg-sky-800 text-white flex flex-row justify-center mt-auto">Welcome to our universe</footer>
</main>
<!-- @endsection -->






