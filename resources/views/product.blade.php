<x-layout title="Smash Up | {{$product['name']}}">


<section class="m-4 max-w-md mx-auto bg-white shadow-md overflow-hidden rounded-lg mb-4">
    <img class="w-full h-96" src="{{$product['img'] ? $product['img'] : '/img/paysage.png'}}" alt="{{$product['name']}}">
    <div class="px-4 py-2">
        <h1 class="font-bold text-xl mb-2">{{$product['name']}}</h1>
        <p class="text-gray-700 text-base">{!! $product['description'] ? nl2br(e($product['description'])) :'les détails de ce produits ne sont pas encore dévoilés mais soyez patients !'!!}</p>
    </div>
    <div class="px-4 py-2">
        <span class="text-gray-900 font-bold">{{$product['price']}} €</span>
    </div>
    <x-basketButon :productId="$product['id']"/>
</section>
</x-layout>