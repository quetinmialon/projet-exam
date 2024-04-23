<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<div>
    <form id="addToBasketForm" method="post" action="">
        @csrf

        <input type="number" name="quantity" id="quantityInput{{ $productId }}" max="10" min="1">
        <input type="hidden" name="productId" id="productIdInput{{ $productId }}" value='{{ $productId }}'>
        <button type="button" onclick="updateActionAndSubmit({{ $productId }})">Ajouter au panier</button>
    </form>
</div>