
<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve(['title' => 'Smash Up'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <section class ="flex flex-row flex-wrap items-start">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
        <article class="max-w-96 mx-auto bg-white shadow-md rounded-lg mb-4"> 
            <div class="relative">
                <?php if (isset($component)) { $__componentOriginal62d08f292a525f69219833e02dcd746d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal62d08f292a525f69219833e02dcd746d = $attributes; } ?>
<?php $component = App\View\Components\Favorite::resolve(['productId' => $product['id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('favorite'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Favorite::ignoredParameterNames()); ?>
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
                <img class="w-full h-96 p-16" src="<?php echo e($product['img'] ? $product['img'] : '/img/paysage.png'); ?>" alt="<?php echo e($product['name']); ?>">
            </div>
            <div class="px-4 py-2">
                <h2 class="flex flex-rox justify-around font-bold text-xl mb-2"><?php echo e($product['name']); ?>

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
                </h2>
                
                <p class="text-gray-700 text-base h-12 max-h-12 overflow-hidden"><?php echo $product['description'] ? nl2br(e($product['description'])) :'les détails de ce produits ne sont pas encore dévoilés mais soyez patients !'; ?></p>
            </div>
            <div class="px-4 py-2 flex flex-row justify-between">
                <span class="text-gray-900 font-bold"><?php echo e($product['price']); ?> €</span>  
                <a href='/product/<?php echo e($product['id']); ?>'><button class="inline-block px-4 py-2 rounded-lg bg-lime-500 hover:bg-lime-600 focus:bg-lime-600 text-white font-semibold shadow-sm transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none" >voir le produit</button></a>
            </div>
        </article>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php endif; ?><?php /**PATH C:\laragon\www\projet-exam\resources\views/home.blade.php ENDPATH**/ ?>