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
                <tr>
                    <td class="px-6 py-4">{{$product['name']}}</td>
                    <td class="px-6 py-4">{{$product['price']}}</td>
                    <td class="px-6 py-4">{{$product['quantity']}}</td>
                    <td class="px-6 py-4">
                        <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-900">Supprimer</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
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

