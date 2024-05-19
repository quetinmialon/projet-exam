<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>backoffice</title>
</head>
<header>
<div class="bg-gray-800 text-white p-4 flex justify-between items-center">
    
    <a href="/" class="text-lg font-bold hover:underline">Accueil du Site</a>

    <div class="hidden md:flex md:justify-between md:items-center space-x-4">
        <a href="/backOffice/products" class="text-lg font-bold hover:underline">Gestion des Produits</a>
        <a href="/backOffice/promoCode" class="text-lg font-bold hover:underline">Codes Promo</a>
        <a href="/backOffice/users" class="text-lg font-bold hover:underline">Utilisateurs</a>
        <a href="/backOffice/orders" class="text-lg font-bold hover:underline">Commandes</a>
        <a href="/logout" class="text-lg font-bold hover:underline">Déconnexion</a>
    </div>
    <div class="md:hidden">
        <button id="menu-toggle" class="text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>
    </div>


</header>

<body>

</div>
<div id="mobile-menu" class="md:hidden hidden px-2 ">
    <div class="flex flex-col">
        <a href="/backOffice/products" class="block text-lg font-bold hover:underline py-2">Gestion des Produits</a>
        <a href="/backOffice/promoCode" class="block text-lg font-bold hover:underline py-2">Codes Promo</a>
        <a href="/backOffice/users" class="block text-lg font-bold hover:underline py-2">Utilisateurs</a>
        <a href="/backOffice/orders" class="block text-lg font-bold hover:underline py-2">Commandes</a>
        <a href="/logout" class="block text-lg font-bold hover:underline py-2">Déconnexion</a>
    </div>
</div>
    {{$slot}}
</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>