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
    @foreach($products as $product)
        <x-favorite :productId="$product['id']"/>
        <x-basketButon :productId="$product['id']"/>
        <div> {{$product['name']}} </div>
        <div>{{$product['description']}}</div>
        <div>{{$product['price']}} €</div>
        <img src="{{$product['img']}}" >
        <div>{{$product['id']}}</div>
        <a href='/product/{{$product['id']}}'><button >voir le produit</button></a>
    @endforeach
    </section>
    <x-footer/>
</body>
</html>