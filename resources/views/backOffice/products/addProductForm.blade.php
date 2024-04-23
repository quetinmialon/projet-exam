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
        <form method="POST" action="/backOffice/addProduct">
            @csrf
            <div>
                <input type="text" name="name">                 
            </div>
            <div>
                <input type="number" name="price" scale="0.01">
            </div>
            <button>ajouter le produit</button>
        </form>    
    </section>
    <x-footer/>
</body>