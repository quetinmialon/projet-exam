<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    <title>Document</title>
</head>
<body>
    <?php if (isset($component)) { $__componentOriginal2a2e454b2e62574a80c8110e5f128b60 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2a2e454b2e62574a80c8110e5f128b60 = $attributes; } ?>
<?php $component = App\View\Components\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2a2e454b2e62574a80c8110e5f128b60)): ?>
<?php $attributes = $__attributesOriginal2a2e454b2e62574a80c8110e5f128b60; ?>
<?php unset($__attributesOriginal2a2e454b2e62574a80c8110e5f128b60); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a2e454b2e62574a80c8110e5f128b60)): ?>
<?php $component = $__componentOriginal2a2e454b2e62574a80c8110e5f128b60; ?>
<?php unset($__componentOriginal2a2e454b2e62574a80c8110e5f128b60); ?>
<?php endif; ?>
    <section class ="flex flex-row">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
        <div class="max-w-96 mx-auto bg-white shadow-md rounded-lg mb-4"> 
           
            
            <img class="w-full h-auto" src="<?php echo e($product['img']); ?>" alt="<?php echo e($product['name']); ?>">
            <div class="px-4 py-2">
                <div class="font-bold text-xl mb-2"><?php echo e($product['name']); ?> </div>
                <?php if (isset($component)) { $__componentOriginal62d08f292a525f69219833e02dcd746d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal62d08f292a525f69219833e02dcd746d = $attributes; } ?>
<?php $component = App\View\Components\Favorite::resolve(['productId' => $product['id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('favorite'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Favorite::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal62d08f292a525f69219833e02dcd746d)): ?>
<?php $attributes = $__attributesOriginal62d08f292a525f69219833e02dcd746d; ?>
<?php unset($__attributesOriginal62d08f292a525f69219833e02dcd746d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal62d08f292a525f69219833e02dcd746d)): ?>
<?php $component = $__componentOriginal62d08f292a525f69219833e02dcd746d; ?>
<?php unset($__componentOriginal62d08f292a525f69219833e02dcd746d); ?>
<?php endif; ?>
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
            <a href='/product/<?php echo e($product['id']); ?>'><button >voir le produit</button></a>
        </div>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
    <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
</body>
</html><?php /**PATH C:\laragon\www\projet-exam\resources\views/home.blade.php ENDPATH**/ ?>