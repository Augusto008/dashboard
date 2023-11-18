<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        {{-- CSS --}}
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="{{asset('resources/css/app.css')}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        {{-- ajax --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>

        {{-- Bootstrap 5.3.2 --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.css" rel="stylesheet">

    </head>
    <body>
        
        <header>
            @include('layouts.header')
        </header>
        
        <article>
            @yield('content')
        </article>

        <footer>
            @include('layouts.footer')
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.js"></script>
    </body>
</html>
