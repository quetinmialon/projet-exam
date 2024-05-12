<x-layout-admin>
    <div class="text-gray-900 bg-gray-200">
        <div class="p-4 flex">
            <h1 class="text-3xl">Products - </h1> 
            <a href="/backOffice/addProductForm"><button class="mx-2 inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Ajouter un Produit</button></a>

        </div>
        <div class="px-3 py-4 flex justify-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($products as $product)
                <div class="bg-white shadow-md rounded-lg">
                    <img class="w-full h-auto" src="{{$product['img'] ? $product['img'] : '/img/paysage.png'}}" alt="{{$product['name']}}">
                    <div class="px-4 py-2">
                        <div class="font-bold text-xl mb-2">{{$product['name']}}</div>
                        <p class="text-gray-700 text-base">{{$product['description'] ? $product['description'] :'les détails de ce produits ne sont pas encore dévoilés mais soyez patients !'}}</p>
                    </div>
                    <div class="px-4 py-2">
                        <span class="text-gray-900 font-bold">{{$product['price']}} €</span>
                    </div>
                    <div class="flex justify-between px-4 py-2">
                        <a href="/product/{{$product['id']}}" class="text-blue-500 hover:text-blue-700">View</a>
                        <div>
                            <a href="/backOffice/product/edit/{{$product['id']}}" class="text-green-500 hover:text-green-700">Edit</a>
                            <a href="/backOffice/products/delete/{{$product['id']}}" class="text-red-500 hover:text-red-700 ml-2">Delete</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout-admin>
