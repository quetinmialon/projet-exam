<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<div class="flex items-center justify-center text-sm flex-col">
    <form id="addToBasketForm" method="post" action="" class="flex items-center">
        @csrf
        <div class="relative flex">
            <button type="button" onclick="decrementQuantity('{{ $productId }}')" class="absolute left-0 top-0 bg-gray-200 text-gray-700 px-2 py-1 rounded-l-md hover:bg-gray-300 focus:outline-none" title="réduire la quantié">-</button>
            <input type="number" name="quantity" id="quantityInput{{ $productId }}" value="1" min="1" max="5" class="border border-gray-300 px-3 py-1 focus:outline-none text-center">
            <button type="button" onclick="incrementQuantity('{{ $productId }}')" class="absolute right-0 top-0 bg-gray-200 text-gray-700 px-2 py-1 rounded-r-md hover:bg-gray-300 focus:outline-none" title="augmenter la quantié">+</button>
        </div>

        <input type="hidden" name="productId" id="productIdInput{{ $productId }}" value="{{ $productId }}">
        <img src='/img/panier-ajouter.png' type="submit" onclick="updateActionAndSubmit('{{ $productId }}')" class="hover:scale-110 px-2 py-1 hover:cursor-pointer w-10 h-10 border-black rounded-md" title='ajouter au panier'>
    </form>
</div>
