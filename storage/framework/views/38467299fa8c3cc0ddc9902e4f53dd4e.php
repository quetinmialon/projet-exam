<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>


<div>
    <button onclick="toggleFavorite('<?php echo e($productId); ?>')" id="favorite-button-<?php echo e($productId); ?>" class="px-4 py-2 rounded-lg focus:outline-none transition duration-300 ease-in-out transform <?php echo e($isFavorite ? 'bg-lime-600 text-white hover:bg-emerald-700 hover:scale-105' : 'bg-white text-black hover:bg-gray-200 shadow-md hover:scale-105'); ?>">
        <?php echo e($isFavorite ? 'Retirer des favoris' : 'Ajouter aux favoris'); ?>

    </button>
</div>

<?php /**PATH C:\laragon\www\projet-exam\resources\views/components/favorite.blade.php ENDPATH**/ ?>