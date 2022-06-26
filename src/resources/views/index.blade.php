<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog: @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('style')
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <header class="d-flex align-items-center">
            <div class="container d-flex justify-content-end">
                <div class="d-flex justify-content-between m-3" style="min-width: 15%;">
                    <img src="{{ asset('images/facebook.png') }}" alt="facebook" class="top-bar-image">
                    <img src="{{ asset('images/instagram.png') }}" alt="instagram" class="top-bar-image">
                    <img src="{{ asset('images/linkedin.png') }}" alt="linkedin" class="top-bar-image">
                    <img src="{{ asset('images/pinterest.png') }}" alt="pinterest" class="top-bar-image">
                </div>
            </div>
        </header>
        <nav class="m-5">
            <div class="text-center fs-1">
                Blog title
            </div>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a href="#" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Sklep</a>
                </li>
                <li class="nav-item">
                    @auth
                        <a href="/logout" class="nav-link">Wyloguj</a>
                    @endauth

                    @guest
                        <a href="/" class="nav-link">Zaloguj</a>
                    @endguest
                </li>
            </ul>
        </nav>
        <main class="container container-custom">
            @yield('content')
        </main>
    </body>
</html>
