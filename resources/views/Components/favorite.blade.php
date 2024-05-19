<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>


<div class="absolute top-8 right-8">
    <img onclick="toggleFavorite('{{ $productId }}')" id="favorite-button-{{ $productId }}" class=" w-8 h-8" src=" {{ $isFavorite ? '/img/prefere.gif' : '/img/etoile.png' }}" title="{{ !$isFavorite ? 'ajouter au favoris' : 'retirer des favoris' }}">
</div>

