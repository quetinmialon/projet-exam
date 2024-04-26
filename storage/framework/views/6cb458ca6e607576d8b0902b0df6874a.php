<div class="max-w-md mx-auto bg-white shadow-md overflow-hidden rounded-lg mb-4">
    <img class="w-full h-auto" src="<?php echo e($product['img']); ?>" alt="<?php echo e($product['name']); ?>">
    <div class="px-4 py-2">
        <div class="font-bold text-xl mb-2"><?php echo e($product['name']); ?></div>
        <p class="text-gray-700 text-base"><?php echo e($product['description']); ?></p>
    </div>
    <div class="px-4 py-2">
        <span class="text-gray-900 font-bold"><?php echo e($product['price']); ?> €</span>
    </div>
    <?php if (isset($component)) { $__componentOriginaldcda4c6affaab0b33a4e4640b5ebbcd9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldcda4c6affaab0b33a4e4640b5ebbcd9 = $attributes; } ?>
<?php $component = App\View\Components\BasketButon::resolve(['productId' => $product['id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('basketButon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BasketButon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
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
</div>
<?php /**PATH C:\laragon\www\projet-exam\resources\views/product.blade.php ENDPATH**/ ?>