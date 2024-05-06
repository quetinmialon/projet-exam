<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<div class="container mx-auto mt-8">
    <h1 class="text-3xl font-semibold mb-4">Panier</h1>
    <div id="panier" class="bg-white shadow-md rounded-lg overflow-hidden">
        <table id="panierTable" class="w-full">
            <thead class="bg-lime-600 text-white">
                <tr>
                    <th class="px-6 py-4 text-left">Produit</th>
                    <th class="px-6 py-4 text-left">Prix</th>
                    <th class="px-6 py-4 text-left">Quantité</th>
                    <th class="px-6 py-4"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $basket['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr id="lineProduct<?php echo e($product['id']); ?>">
                    <td class="px-6 py-4"><?php echo e($product['name']); ?></td>
                    <td class="px-6 py-4"><?php echo e($product['price']); ?></td>
                    
                        <td class="px-6 py-4"><input type="number" name="quantity" id="quantityInput<?php echo e($product['id']); ?>" value="<?php echo e($product['quantity']); ?>"></td>
                        <input type="hidden" name="productId" id="productIdInput<?php echo e($product['id']); ?>" value='<?php echo e($product['id']); ?>'>
                        <td class="px-6 py-4">
                        <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-900 hover:cursor-pointer" onclick="updateActionAndSubmit(`<?php echo e($product['id']); ?>`)">modifier</button>
                        <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-900 hover:cursor-pointer" onclick ="deleteProductFromBasket(`<?php echo e($product['id']); ?>`)">Supprimer</button>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <th class="px-6 py-4">
                        <form method="post" action=""></form>
                        <input id='inputPromoCode'type="texte" name="promoCode" placeholder="entrez votre code Promo" value="<?php echo e($basket['promoCode']? $basket['promoCode']['label'] : ''); ?>">

                    </th>
                    <th>
                        <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-gray-900 hover:cursor-pointer" onclick="deletePromoCode()">supprimer</button>
                        <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-gray-900 hover:cursor-pointer" onclick="applyPromoCode()">appliquer</button>
                    </th>
                    <th class="px-6 py-4 text-left">
                        remise : <?php echo e($basket['remise']); ?>

                    </th>
                    
                        <th class="px-6 py-4 text-left">
                            prix total : <?php echo e($basket['total']); ?>

                        </th>
                

                        <th>
                            <a href="/paymentInformation"><button class="bg-lime-600 text-white px-4 py-2 rounded hover:bg-gray-gray-900 hover:cursor-pointer">acheter</button></a>
                        </th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>


<?php /**PATH C:\laragon\www\projet-exam\resources\views/auth/basket.blade.php ENDPATH**/ ?>