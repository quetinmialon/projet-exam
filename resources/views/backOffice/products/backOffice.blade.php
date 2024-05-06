<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body>
    <x-header/>
    <section>
        <a href="/backOffice/products"><div>gestion des produits</div></a>
        <a href="/backOffice/promoCode"><div>gestion des codes promo</div></a>
        <a href="/backOffice/users"><div>gestion utilisateurs</div></a>    
        <a href="/backOffice/orders"><div>gestion des commandes</div></a>   
    </section>
    <x-footer/>
</body>