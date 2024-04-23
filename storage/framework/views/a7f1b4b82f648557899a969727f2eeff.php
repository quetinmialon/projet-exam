<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>

<div>
    <form id="addToBasketForm" method="post" action="">
        <?php echo csrf_field(); ?>

        <input type="number" name="quantity" id="quantityInput<?php echo e($productId); ?>" max="10" min="1">
        <input type="hidden" name="productId" id="productIdInput<?php echo e($productId); ?>" value='<?php echo e($productId); ?>'>
        <button type="button" onclick="updateActionAndSubmit('<?php echo e($productId); ?>')">Ajouter au panier</button>
    </form>
</div><?php /**PATH C:\laragon\www\projet-exam\resources\views/components/basketButon.blade.php ENDPATH**/ ?>