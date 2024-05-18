
<x-layout>
    <section class ="flex flex-row flex-wrap items-start">
    @foreach($products as $product)
       
        <article class="max-w-96 mx-auto bg-white shadow-md rounded-lg mb-4"> 
            <div class="relative">
                <x-favorite :productId="$product['id']"/>
                <img class="w-full h-96 p-16" src="{{$product['img'] ? $product['img'] : '/img/paysage.png'}}" alt="{{$product['name']}}">
            </div>
            <div class="px-4 py-2">
                <h2 class="flex flex-rox justify-around font-bold text-xl mb-2">{{$product['name']}}
                    <x-basketButon :productId="$product['id']"/>  
                </h2>
                
                <p class="text-gray-700 text-base h-12 max-h-12 overflow-hidden">{!! $product['description'] ? nl2br(e($product['description'])) :'les détails de ce produits ne sont pas encore dévoilés mais soyez patients !'!!}</p>
            </div>
            <div class="px-4 py-2 flex flex-row justify-between">
                <span class="text-gray-900 font-bold">{{$product['price']}} €</span>  
                <a href='/product/{{$product['id']}}'><button class="inline-block px-4 py-2 rounded-lg bg-lime-500 hover:bg-lime-600 focus:bg-lime-600 text-white font-semibold shadow-sm transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none" >voir le produit</button></a>
            </div>
        </article>


    @endforeach
    </section>
</x-layout>