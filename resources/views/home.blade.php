<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <x-header/>
    <x-wallpaper/>
    <section>
    @for($i = 0; $i<4 ; $i++)
        <div> {{$products}} </div>
        <div>{{$products}}€</div>
        <img src="{{$products}}" >
    @endfor
    </section>
    <section>
    @for($i = 0; $i<4 ; $i++)
        <div> {{$products}} </div>
        <div>{{$products}}€</div>
        <img src="{{$products}}" >
    @endfor
    </section>
    <section>
    @for($i = 0; $i<4 ; $i++)
        <div> {{$products}} </div>
        <div>{{$products}}€</div>
        <img src="{{$products}}" >
    @endfor
    </section>
    <x-footer/>
</body>
</html>