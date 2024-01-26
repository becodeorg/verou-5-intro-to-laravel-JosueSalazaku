@extends('layout')

@section('nav')
    @parent

    <!-- Additional content specific to the 'form.blade.php' view -->
@endsection

@section('content')
    <main class="h-screen bg-indigo-400">
        <form action="post" method="post">
            <input type="text" name="name" id="">
            <input type="text" name="email"> 
            <button>Subscribe</button>
        </form>
    </main>
@endsection
