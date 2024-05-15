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
    <div class="text-gray-900 bg-gray-200">
        <div class="p-4 flex items-center justify-between">
            <h1 class="text-3xl">Promo Codes</h1>
            <form action='/backOffice/promoCode/add' method="post" class="flex">
                <?php echo csrf_field(); ?>
                <div class="mr-2">
                    <input type="text" name="label" id="label" class="p-2 border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Nom du Code" required>
                </div>
                <div class="mr-2">
                    <input type="number" name="value" id="value" step="0.01" class="p-2 border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Montant du Code" required>
                </div>
                <div class="mr-2">
                    <select name="type" id="type" class="p-2 border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                        <option value="percentage">Pourcentage</option>
                        <option value="flat">Euros</option>
                    </select>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Ajouter Code Promo</button>
            </form>
        </div>

        <div class="px-3 py-4 flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <tbody>
                    <tr class="border-b hover:bg-orange-100 bg-gray-100 even:bg-slate-200">
                        <th class="text-left p-3 px-5">Label</th>
                        <th class="text-left p-3 px-5">Type</th>
                        <th class="text-left p-3 px-5">Value</th>
                        <th class="text-left p-3 px-5">Actions</th>
                    </tr>
                    <?php $__currentLoopData = $promoCodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $promoCode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="border-b hover:bg-orange-100 bg-gray-100">
                        <td class="p-3 px-5"><?php echo e($promoCode['label']); ?></td>
                        <td class="p-3 px-5"><?php echo e($promoCode['type']); ?></td>
                        <td class="p-3 px-5">
                            <?php if($promoCode['type'] === 'flat'): ?>
                                <?php echo e($promoCode['value']); ?> €
                            <?php elseif($promoCode['type'] === 'percentage'): ?>
                                <?php echo e($promoCode['value']); ?> %
                            <?php endif; ?>
                        </td>
                        <td class="p-3 px-5 flex">
                                <a href="/backOffice/deletPromoCode/<?php echo e($promoCode['label']); ?>"><button class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">supprimer</button></a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
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
<?php endif; ?>
<?php /**PATH C:\laragon\www\projet-exam\resources\views/backOffice/promoCode/promoCodes.blade.php ENDPATH**/ ?>