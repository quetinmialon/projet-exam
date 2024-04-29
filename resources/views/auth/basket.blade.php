<x-layout>
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
                        <form method="post" action=""></form>
                        <input id='inputPromoCode'type="texte" name="promoCode" placeholder="entrez votre code Promo" value="{{ $basket['promoCode']? $basket['promoCode']['label'] : ''}}">

                    </th>
                    <th>
                        <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-gray-900 hover:cursor-pointer" onclick="deletePromoCode()">supprimer</button>
                        <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-gray-900 hover:cursor-pointer" onclick="applyPromoCode()">appliquer</button>
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
</x-layout>


