@extends('layouts.guest')

@section('title', 'Welcome')

@section('content')
<div class="splash">

    <header role="banner">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="#" class="navbar-brand">FunctionCoord</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Features</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Pricing</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    @auth
                        <a href="{{ route('dashboard') }}" class="btn">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn">Log In</a>
                        <a href="{{ route('register') }}" class="btn" style="cursor: pointer;">Sign Up</a>
                    @endauth
                </span>
            </div>
        </nav>
    </header>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                &nbsp;
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <main role="main">

                    <h1>FunctionCoord<small>(ination)</small></h1>

                    <p>
                        Don't you just hate it when the company to which you devoted over 5 years vanishes along with your entire portfolio?
                    </p>

                    <p>
                        I know I sure do!
                    </p>

                    <p>
                        So this is my attempt to recreate as much as possible, using what I've learned over that half-decade, to keep the memory alive and maybe show off a bit of what I can do.
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto aspernatur assumenda consequatur cum delectus dolores earum facere, facilis magnam nisi odio placeat porro possimus quasi rerum suscipit! Molestiae, porro.
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consequatur debitis dolore eum, ex explicabo harum incidunt, ipsum iusto magnam mollitia nesciunt numquam, optio placeat reiciendis rem unde vitae voluptatem?
                    </p>

                </main>
            </div>
        </div>

    </div>

</div>

@endsection