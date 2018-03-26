@extends('layouts.guest')

@section('title', 'Welcome')

@section('content')
<div class="splash">

    <header role="banner">
        <nav>
            <a href="#top" class="active">Overview</a>
            <a href="#features">Features</a>
            <a href="#pricing">Pricing</a>
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Log In</a>
                <a href="{{ route('register') }}" style="cursor: pointer;">Sign Up</a>
            @endauth
        </nav>
    </header>

    <main role="main">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto aspernatur assumenda consequatur cum delectus dolores earum facere, facilis magnam nisi odio placeat porro possimus quasi rerum suscipit! Molestiae, porro.

        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consequatur debitis dolore eum, ex explicabo harum incidunt, ipsum iusto magnam mollitia nesciunt numquam, optio placeat reiciendis rem unde vitae voluptatem?

        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi facere harum magni molestiae porro reprehenderit sed tempore. Delectus enim, error et laborum numquam omnis recusandae reiciendis unde? Dolor, exercitationem, fugit?
    </main>

</div>

@endsection