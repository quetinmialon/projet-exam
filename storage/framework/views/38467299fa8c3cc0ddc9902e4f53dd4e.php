<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>


<div class="absolute top-8 right-8">
    <img onclick="toggleFavorite('<?php echo e($productId); ?>')" id="favorite-button-<?php echo e($productId); ?>" class=" w-8 h-8" src=" <?php echo e($isFavorite ? '/img/prefere.gif' : '/img/etoile.png'); ?>" title="<?php echo e(!$isFavorite ? 'ajouter au favoris' : 'retirer des favoris'); ?>">
</div>

<?php /**PATH C:\laragon\www\projet-exam\resources\views/components/favorite.blade.php ENDPATH**/ ?>