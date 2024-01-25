@extends('layout')

@section('content')
<header class="p-8 bg-slate-900 text-white text-xl ">
        <ul class="flex flex-row justify-around ">
        <li class="font-bold"><a href="{{"posts"}}">Xenopedia</a></li>
        <li><a href="{{"species"}}">Species</a></li>
        <li>games</li>
    </ul></header>
<main class="h-screen bg-indigo-400 flex flex-col justify-evenly">
<article class=" mt-8 mx-20 mb-20">
<p class="font-medium text-2xl">
Welcome to Xenopedia, the premier online destination for extraterrestrial enthusiasts and cosmic researchers alike! At Xenopedia, we embark on a fascinating journey into the vast unknown, providing a comprehensive and ever-expanding compendium of alien species from across the cosmos.

Our mission is to unravel the mysteries of the universe by documenting and categorizing the diverse life forms that inhabit the far reaches of space. From the methane-breathing inhabitants of gas giants to silicon-based entities thriving on desolate moons, Xenopedia strives to capture the richness and complexity of alien life in all its forms.

Discover the extraordinary, the bizarre, and the utterly captivating as we delve into the depths of uncharted territories. Whether you are an aspiring astrobiologist, a science fiction enthusiast, or simply someone with a curious mind, Xenopedia invites you to contribute to our ever-growing repository of knowledge.    <br></p>
<a href={{"form"}}><h1 class="mt-12 mb-12 font-extrabold text-xl">Subscribe for more info</h1></a>
</article>





    <footer class="bg-sky-800 text-white flex flex-row justify-center align-bottom">Welcome to our universe</footer>
    </main>
@endsection

