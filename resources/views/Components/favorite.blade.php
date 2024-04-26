<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>


<div>
    <button onclick="toggleFavorite('{{ $productId }}')" id="favorite-button-{{ $productId }}" class="px-4 py-2 rounded-lg focus:outline-none transition duration-300 ease-in-out transform {{ $isFavorite ? 'bg-lime-600 text-white hover:bg-emerald-700 hover:scale-105' : 'bg-white text-black hover:bg-gray-200 shadow-md hover:scale-105' }}">
        {{ $isFavorite ? 'Retirer des favoris' : 'Ajouter aux favoris' }}
    </button>
</div>

