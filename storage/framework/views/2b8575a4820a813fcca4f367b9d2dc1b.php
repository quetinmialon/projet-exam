<!-- order-details.blade.php -->

<div id="orderDetails_<?php echo e($order['id']); ?>" class="hidden mt-4">
    <h4 class="text-lg font-medium text-gray-900 mb-2">Détails de la commande</h4>
    <ul class="divide-y divide-gray-200">
        <?php $__currentLoopData = $order['productCommands']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productCommand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="py-2">
                <?php echo e($productCommand['product']['name']); ?> - <?php echo e($productCommand['quantity']); ?>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let toggleButton = document.getElementById('toggleOrderDetails_<?php echo e($order['id']); ?>');
        let orderDetails = document.getElementById('orderDetails_<?php echo e($order['id']); ?>');

        toggleButton.addEventListener('click', function() {
            if (orderDetails.classList.contains('hidden')) {
                orderDetails.classList.remove('hidden');
                orderDetails.style.display = 'block';
            } else {
                orderDetails.classList.add('hidden');
                orderDetails.style.display = 'none';
            }
        });
    });
</script>

<?php /**PATH C:\laragon\www\projet-exam\resources\views/components/order-details.blade.php ENDPATH**/ ?>