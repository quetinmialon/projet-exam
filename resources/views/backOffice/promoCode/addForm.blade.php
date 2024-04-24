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
        <form method="POST" action="/backOffice/promoCodes">
            @csrf
            <div>
                <input type="text" name="label">                 
            </div>
            <div>
                <input type="number" name="value">
            </div>
            <div>
                <select name="type">
                    <option value="percentage">pourcentage</option>
                    <option value="flat">fixe</option>
                </select>
            </div>
            <button>ajouter le code promo</button>
        </form>    
    </section>
    <x-footer/>
</body>