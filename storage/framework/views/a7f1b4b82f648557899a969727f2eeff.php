<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>

<div class="flex items-center justify-center">
    <form id="addToBasketForm" method="post" action="" class="flex items-center">
        <?php echo csrf_field(); ?>

        <input type="number" name="quantity" id="quantityInput<?php echo e($productId); ?>" max="10" min="1" class="border border-gray-300 rounded-l-md px-3 py-2 focus:outline-none focus:bordergreen-500">
        <input type="hidden" name="productId" id="productIdInput<?php echo e($productId); ?>" value='<?php echo e($productId); ?>'>
        <button type="button" onclick="updateActionAndSubmit('<?php echo e($productId); ?>')" class="bg-lime-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded-r-md focus:outline-none focus:shadow-outline">Ajouter au panier</button>
    </form>
</div>
<?php /**PATH C:\laragon\www\projet-exam\resources\views/components/basketButon.blade.php ENDPATH**/ ?>