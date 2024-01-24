<?php require '/Applications/XAMPP/xamppfiles/htdocs/php/verou-5-intro-to-laravel-JosueSalazaku/laravel/routes/aliens.php'; ?>

@vite('resources/css/app.css')
<main class="h-screen bg-indigo-400 flex flex-col">
    <header class="p-8 bg-slate-900 text-white text-xl">
        <ul class="flex flex-row justify-around">
            <li class="font-bold"><a href="{{"posts"}}">Xenopedia</a></li>
            <li><a href="{{"species"}}">Species</a></li>
            <li>games</li>
        </ul>
    </header>

    <?php foreach ($alienSpecies as $alien): ?>
        <article class="mt-8 mx-20 mb-20">
            <h2><?= $alien['name']; ?></h2>
            <p>Type: <?= $alien['type']; ?></p>
            <p>Solar System: <?= $alien['solar_system']; ?></p>
        </article>
    <?php endforeach; ?>

    <footer class="bg-sky-800 text-white flex flex-row justify-center">Welcome to our universe</footer>
</main>
