<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve(['title' => 'Smash Up | '.e($product['name']).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>


<section class="m-4 max-w-md mx-auto bg-white shadow-md overflow-hidden rounded-lg mb-4">
    <img class="w-full h-96" src="<?php echo e($product['img'] ? $product['img'] : '/img/paysage.png'); ?>" alt="<?php echo e($product['name']); ?>">
    <div class="px-4 py-2">
        <h1 class="font-bold text-xl mb-2"><?php echo e($product['name']); ?></h1>
        <p class="text-gray-700 text-base"><?php echo $product['description'] ? nl2br(e($product['description'])) :'les détails de ce produits ne sont pas encore dévoilés mais soyez patients !'; ?></p>
    </div>
    <div class="px-4 py-2">
        <span class="text-gray-900 font-bold"><?php echo e($product['price']); ?> €</span>
    </div>
    <?php if (isset($component)) { $__componentOriginaldcda4c6affaab0b33a4e4640b5ebbcd9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldcda4c6affaab0b33a4e4640b5ebbcd9 = $attributes; } ?>
<?php $component = App\View\Components\BasketButon::resolve(['productId' => $product['id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('basketButon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\BasketButon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldcda4c6affaab0b33a4e4640b5ebbcd9)): ?>
<?php $attributes = $__attributesOriginaldcda4c6affaab0b33a4e4640b5ebbcd9; ?>
<?php unset($__attributesOriginaldcda4c6affaab0b33a4e4640b5ebbcd9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldcda4c6affaab0b33a4e4640b5ebbcd9)): ?>
<?php $component = $__componentOriginaldcda4c6affaab0b33a4e4640b5ebbcd9; ?>
<?php unset($__componentOriginaldcda4c6affaab0b33a4e4640b5ebbcd9); ?>
<?php endif; ?>
</section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\projet-exam\resources\views/product.blade.php ENDPATH**/ ?>