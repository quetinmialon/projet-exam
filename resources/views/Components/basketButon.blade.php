<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<div class="flex items-center justify-center">
    <form id="addToBasketForm" method="post" action="" class="flex items-center">
        @csrf

        <input type="number" name="quantity" id="quantityInput{{ $productId }}" max="10" min="1" class="border border-gray-300 rounded-l-md px-3 py-2 focus:outline-none focus:bordergreen-500">
        <input type="hidden" name="productId" id="productIdInput{{ $productId }}" value='{{ $productId }}'>
        <button type="button" onclick="updateActionAndSubmit('{{ $productId }}')" class="bg-lime-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded-r-md focus:outline-none focus:shadow-outline">Ajouter au panier</button>
    </form>
</div>
