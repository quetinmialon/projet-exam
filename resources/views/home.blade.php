<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hello world
    @foreach($products as $product)
        <div> {{$product["name"]}} </div>
        <div>{{$product["price"]}}€</div>
    @endforeach

</body>
</html>