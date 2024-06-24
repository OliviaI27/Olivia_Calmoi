<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'OliviaProiect') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    
</head>
<body>
    <div class="container ">
        <nav class="navbar navbar-expand-lg  " >
            <div class="container-fluid  ">
                <a class="navbar-brand" href="{{ route('guest.index') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class=" img-fluid logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <div class="navbar-nav">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                        <a class="nav-link {{ Request::is('gallery') ? 'active' : '' }}" href="/gallery">Gallery</a>
                        <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact us</a>
                        <a href="/login" class="btn btn-bg-light  px-4 py-2 me-3">
                            <i class=""></i>
                            Log In
                        </a>
                        <a href="/register" class="btn btn-bg-dark border  px-4 py-2">
                            <i class=""></i>
                            Register
                        </a>
                        
                    </div>
                </div>
            </div>
        </nav>
    </div>

    @yield('content')
    <footer class="mt-5  d-flex align-items-center justify-content-center  ">
        <div class="d-flex align-center justify-content-center ">
            <p class="my-5">
                Copyright 2024 <a href="/"></a>
            </p>
        </div>
    </footer>
</body>
</html>
