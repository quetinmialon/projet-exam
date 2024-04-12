<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>


<div>
    <a onclick="toggleFavorite(<?php echo e($productId); ?>)" id="favorite-button-<?php echo e($productId); ?>" class="px-4 py-2 hover:cursor-pointer rounded-lg focus:outline-none <?php echo e($isFavorite ? 'bg-green-500 text-white' : 'bg-white text-black'); ?>">
        Favoris
    </a>
</div>

<?php /**PATH C:\laragon\www\projet-exam\resources\views/components/favorite.blade.php ENDPATH**/ ?>