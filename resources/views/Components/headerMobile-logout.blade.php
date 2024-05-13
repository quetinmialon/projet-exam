<!DOCTYPE html>
<html lang="en" class="size-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body class="flex flex-col flex-grow-1"></body>


<div class="flex justify-between items-center bg-slate-100 text-3xl p-4">
    <div class="flex items-center gap-4">
        <a href="/">
            <img src="/img/smashup-logo.png" alt="logo" class="h-16 w-auto">
        </a>
    </div>

    <!-- Menu burger pour les petits écrans -->
    <button id="menu-toggle" class="block md:hidden">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-lime-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <line x1="3" y1="12" x2="21" y2="12"></line>
    <line x1="3" y1="6" x2="21" y2="6"></line>
    <line x1="3" y1="18" x2="21" y2="18"></line>
</svg>

    </button>

    <!-- Contenu du menu burger pour les petits écrans -->
    <div id="mobile-menu" class="md:hidden hidden">
    <form method="GET" action="/" class="flex items-center">
            <input type="text" name="search" value="{{ app('request')->input('search') }}" class="w-48 bg-white border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:ring focus:ring-lime-600 focus:border-lime-600">
            <button type="submit" class="text-sm bg-lime-600 text-white py-2 px-4 rounded-md hover:bg-lime-700 transition duration-300 ease-in-out">
                Recherche
            </button>
        </form>
        <a href="/about" class="block py-2 px-4 text-lime-600 hover:bg-lime-100 hover:text-lime-700 transition duration-300 ease-in-out">
            Extensions
        </a>
        <a href="/rules" class="block py-2 px-4 text-lime-600 hover:bg-lime-100 hover:text-lime-700 transition duration-300 ease-in-out">
            Règles
        </a>
        <a href="/contactUs" class="block py-2 px-4 text-lime-600 hover:bg-lime-100 hover:text-lime-700 transition duration-300 ease-in-out">
            Contact
        </a>
        <a href="/login" class="block py-2 px-4 text-lime-600 hover:bg-lime-100 hover:text-lime-700 transition duration-300 ease-in-out">
            Connexion
        </a>
        <a href="/register" class="block py-2 px-4 bg-lime-600 text-white hover:bg-lime-700 transition duration-300 ease-in-out rounded-full">
            Inscription
        </a>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var menuToggle = document.getElementById('menu-toggle');
        var mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>

