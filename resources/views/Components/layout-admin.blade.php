<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<header class="bg-gray-800 text-white p-4 flex justify-between items-center">
    <a href="/" class="text-lg font-bold hover:underline">Accueil du Site</a>
    <a href="/backOffice/products" class="text-lg font-bold hover:underline">Gestion des Produits</a>
    <a href="/backOffice/promoCode" class="text-lg font-bold hover:underline">Codes Promo</a>
    <a href="/backOffice/users" class="text-lg font-bold hover:underline">Utilisateurs</a>
    <a href="/backOffice/orders" class="text-lg font-bold hover:underline">Commandes</a>
    <a href="/logout" class="text-lg font-bold hover:underline">Déconnexion</a>
</header>

<body>
    {{$slot}}
</body>