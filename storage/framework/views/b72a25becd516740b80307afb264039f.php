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
        <div class="p-4 flex">
            <h1 class="text-3xl">Products - </h1> 
            <a href="/backOffice/addProductForm"><button type="submit" class="mx-2 inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Ajouter un Produit</button></a>

        </div>
        <div class="px-3 py-4 flex justify-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white shadow-md rounded-lg">
                    <img class="w-full h-auto" src="<?php echo e($product['img'] ? $product['img'] : '/img/paysage.png'); ?>" alt="<?php echo e($product['name']); ?>">
                    <div class="px-4 py-2">
                        <div class="font-bold text-xl mb-2"><?php echo e($product['name']); ?></div>
                        <p class="text-gray-700 text-base"><?php echo e($product['description'] ? $product['description'] :'les détails de ce produits ne sont pas encore dévoilés mais soyez patients !'); ?></p>
                    </div>
                    <div class="px-4 py-2">
                        <span class="text-gray-900 font-bold"><?php echo e($product['price']); ?> €</span>
                    </div>
                    <div class="flex justify-between px-4 py-2">
                        <a href="/product/<?php echo e($product['id']); ?>" class="text-blue-500 hover:text-blue-700">View</a>
                        <div>
                            <a href="/backOffice/product/edit/<?php echo e($product['id']); ?>" class="text-green-500 hover:text-green-700">Edit</a>
                            <a href="/backOffice/products/delete/<?php echo e($product['id']); ?>" class="text-red-500 hover:text-red-700 ml-2">Delete</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php endif; ?>
<?php /**PATH C:\laragon\www\projet-exam\resources\views//backOffice/products/products.blade.php ENDPATH**/ ?>