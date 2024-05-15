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
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
        <form method="post" action="/orderCreate" class="space-y-4">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="price" value="<?php echo e(intval($price)); ?>">
            
            <label for="paymentMethod" class="block text-sm font-medium text-gray-700">Choisissez votre moyen de paiement</label>
            <select name="paymentMethod" id="paymentMethod" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:outline-none focus:border-indigo-300">
                <option value="CB">Carte Bancaire</option>
                <option value="Paypal">Paypal</option>
            </select>

            <label for="adress" class="block text-sm font-medium text-gray-700">Entrez votre adresse</label>
            <input type="text" name="adress" id="address" placeholder="Votre adresse" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:outline-none focus:border-indigo-300" required>

            <input type="hidden" name="status" value="waiting">

            <div class="text-gray-700">Prix total : <?php echo e($price); ?></div>

            <button type="submit" class="w-full bg-lime-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition duration-300 ease-in-out">Payer</button>
        </form>
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
<?php /**PATH C:\laragon\www\projet-exam\resources\views/auth/paymentInformation.blade.php ENDPATH**/ ?>