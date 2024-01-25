<?php require '/Applications/XAMPP/xamppfiles/htdocs/php/verou-5-intro-to-laravel-JosueSalazaku/laravel/routes/aliens.php'; ?>

@vite('resources/css/app.css')
<header class="p-8 bg-slate-900 text-white text-xl">
        <ul class="flex flex-row justify-around">
            <li class="font-bold"><a href="{{"posts"}}">Xenopedia</a></li>
            <li><a href="{{"species"}}">Species</a></li>
            <li>games</li>
        </ul>
    </header>
<main class=" bg-indigo-400 flex flex-col">
 
<section>
<?php foreach ($alienSpecies as $alien): ?>
        <article class="mt-8 mx-20 mb-20">
            <h2 class="font-bold text-white text-xl"><?= $alien['name']; ?></h2>
            <p class="text-white">Type: <?= $alien['type']; ?></p>
            <p class="text-blue-800">Solar System: <?= $alien['solar_system']; ?></p>
        </article>
    <?php endforeach; ?>
</section>

    <footer class="bg-sky-800 text-white flex flex-row justify-center">Welcome to our universe</footer>
</main>
