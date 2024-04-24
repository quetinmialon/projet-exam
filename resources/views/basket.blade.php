<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body>
    <x-header/>
<div class="container mx-auto mt-8">
    <h1 class="text-3xl font-semibold mb-4">Panier</h1>
    <div id="panier" class="bg-white shadow-md rounded-lg overflow-hidden">
        <table id="panierTable" class="w-full">
            <thead class="bg-lime-600 text-white">
                <tr>
                    <th class="px-6 py-4 text-left">Produit</th>
                    <th class="px-6 py-4 text-left">Prix</th>
                    <th class="px-6 py-4 text-left">Quantité</th>
                    <th class="px-6 py-4"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($basket['products'] as $product)
                <tr id="lineProduct{{$product['id']}}">
                    <td class="px-6 py-4">{{$product['name']}}</td>
                    <td class="px-6 py-4">{{$product['price']}}</td>
                    
                        <td class="px-6 py-4"><input type="number" name="quantity" id="quantityInput{{$product['id']}}" value="{{$product['quantity']}}"></td>
                        <input type="hidden" name="productId" id="productIdInput{{ $product['id'] }}" value='{{ $product['id'] }}'>
                        <td class="px-6 py-4">
                        <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-900 hover:cursor-pointer" onclick="updateActionAndSubmit(`{{ $product['id'] }}`)">modifier</button>
                        <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-900 hover:cursor-pointer" onclick ="deleteProductFromBasket(`{{$product['id']}}`)">Supprimer</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th class="px-6 py-4">
                        <input type="texte" name="promoCode" value="{{ !empty($basket['promoCode']) ? $basket['promoCode'] : 'entrez un Code Promo' }}">

                    </th>
                    <th>
                        <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-gray-900 hover:cursor-pointer" onclick="">supprimer</button>
                        <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-gray-900 hover:cursor-pointer" onclick="">appliquer</button>
                    </th>
                    <th class="px-6 py-4 text-left">
                        remise : {{$basket['remise']}}
                    </th>
                    <th class="px-6 py-4 text-left">
                        prix total : {{$basket['total']}}
                    </th>

                </tr>
            </tfoot>
        </table>
    </div>
</div>

<x-footer/>
</body>
</html>
