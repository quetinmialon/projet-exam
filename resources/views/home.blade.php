
<x-layout>
    <section class ="flex flex-row">
    @foreach($products as $product)
       
        <div class="max-w-96 mx-auto bg-white shadow-md rounded-lg mb-4"> 
           
            
            <img class="w-full h-auto" src="{{$product['img']}}" alt="{{$product['name']}}">
            <div class="px-4 py-2">
                <div class="font-bold text-xl mb-2">{{$product['name']}} </div>
                <x-favorite :productId="$product['id']"/>
                <p class="text-gray-700 text-base">{{$product['description']}}</p>
            </div>
            <div class="px-4 py-2">
                <span class="text-gray-900 font-bold">{{$product['price']}} €</span>
            </div>
            <x-basketButon :productId="$product['id']"/>        
            <a href='/product/{{$product['id']}}'><button >voir le produit</button></a>
        </div>


    @endforeach
    </section>
</x-layout>