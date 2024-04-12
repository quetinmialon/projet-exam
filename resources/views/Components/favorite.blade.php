<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>


<div>
    <a onclick="toggleFavorite({{ $productId }})" id="favorite-button-{{ $productId }}" class="px-4 py-2 hover:cursor-pointer rounded-lg focus:outline-none {{ $isFavorite ? 'bg-green-500 text-white' : 'bg-white text-black' }}">
        Favoris
    </a>
</div>

