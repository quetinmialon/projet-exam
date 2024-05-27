<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve(['title' => 'Smash Up | payment info'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
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
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\projet-exam\resources\views/auth/paymentInformation.blade.php ENDPATH**/ ?>