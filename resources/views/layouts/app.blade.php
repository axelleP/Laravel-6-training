<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel training</title>

        <link rel="shortcut icon" href="{{ asset('img/laravel.png') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"><!-- public/css/app.css -->
        <link href="{{ asset('css/narval.css') }}" rel="stylesheet">
        <!-- source sachinchoolur : https://www.jsdelivr.com/package/npm/lightgallery -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@1.9.0/src/css/lightgallery.min.css">
        <!--Bibliothèque d'images Font Awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Effet parallaxe (Rque : pixelcog/parallax.js de github ne marche pas) -->
        <!-- source tgomilar : https://cdnjs.com/libraries/paroller.js/1.4.3 -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/paroller.js/1.4.3/jquery.paroller.min.js"></script>
        <!-- Galerie d'images -->
        <script src="https://cdn.jsdelivr.net/npm/lightgallery@1.9.0/dist/js/lightgallery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lg-thumbnail@1.2.1/dist/lg-thumbnail.min.js"></script><!-- affiche les miniatures en mode diapo -->
        <script src="https://cdn.jsdelivr.net/npm/lg-fullscreen@1.2.1/dist/lg-fullscreen.min.js"></script><!-- permet le plein écran sur l'image -->
    </head>
    <body>
        <div class="container-fluid p-0">
            @yield('content')
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script><!-- public/js/app.js -->
    </body>
    <footer class="py-4 text-white text-center border-top">
        <small>&#128540 Dédicace à Antoine et Tristan &#128540</small>
    </footer>
</html>