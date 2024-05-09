
<?php if (isset($component)) { $__componentOriginal2e6fb18f75884c4fed4e10444e669251 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e6fb18f75884c4fed4e10444e669251 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout-admin','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout-admin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>


    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-4">Statistiques</h2>
                <ul class="divide-y divide-gray-300">

                    <li class="flex justify-between items-center py-2">
                        <span>Nombre d'utilisateurs inscrits :</span>
                        <span class="font-bold"><?php echo e($totalUsers); ?></span>
                    </li>
                    <li class="flex justify-between items-center py-2">
                        <span>Nombre total de commandes passées :</span>
                        <span class="font-bold"><?php echo e($totalOrders); ?></span>
                    </li>
                    <li class="flex justify-between items-center py-2">
                        <span>Montant Total des Commandes Passées :</span>
                        <span class="font-bold"><?php echo e($totalOrdersPrice); ?>€</span>
                    </li>
                    <li class="flex justify-between items-center py-2">
                        <span>Nombre de Produits Différent sur le Site :</span>
                        <span class="font-bold"><?php echo e($totalProducts); ?></span>
                    </li>
                    <li class="flex justify-between items-center py-2">
                        <span>Nombre de Codes Promos disponnibles :</span>
                        <span class="font-bold"><?php echo e($totalPromoCodes); ?></span>
                    </li>
                </ul>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-4">Navigation rapide</h2>
                <ul class="divide-y divide-gray-300">
                    <li class="py-2"><a href="/backOffice/orders" class="text-blue-600 hover:underline">Consulter les commandes</a></li>
                    <li class="py-2"><a href="/backOffice/products" class="text-blue-600 hover:underline">Gérer les produits</a></li>
                    <li class="py-2"><a href="/backOffice/users" class="text-blue-600 hover:underline">Consulter les utilisateurs</a></li>
                    <li class="py-2"><a href="/backOffice/promoCode" class="text-blue-600 hover:underline">Gérer les codes promo</a></li>
                </ul>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e6fb18f75884c4fed4e10444e669251)): ?>
<?php $attributes = $__attributesOriginal2e6fb18f75884c4fed4e10444e669251; ?>
<?php unset($__attributesOriginal2e6fb18f75884c4fed4e10444e669251); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e6fb18f75884c4fed4e10444e669251)): ?>
<?php $component = $__componentOriginal2e6fb18f75884c4fed4e10444e669251; ?>
<?php unset($__componentOriginal2e6fb18f75884c4fed4e10444e669251); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\projet-exam\resources\views/backOffice/backOffice.blade.php ENDPATH**/ ?>