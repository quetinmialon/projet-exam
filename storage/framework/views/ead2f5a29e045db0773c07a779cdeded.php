
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
    <section class ="flex flex-row flex-wrap items-start">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
        <div class="max-w-96 mx-auto bg-white shadow-md rounded-lg mb-4"> 
           
            
            <img class="w-full h-auto p-16" src="<?php echo e($product['img'] ? $product['img'] : '/img/paysage.png'); ?>" alt="<?php echo e($product['name']); ?>">
            <div class="px-4 py-2">
                <div class="font-bold text-xl mb-2"><?php echo e($product['name']); ?> </div>
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
                <p class="text-gray-700 text-base"><?php echo e($product['description'] ? $product['description'] :'les détails de ce produits ne sont pas encore dévoilés mais soyez patients !'); ?></p>
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
            <a href='/product/<?php echo e($product['id']); ?>'><button >voir le produit</button></a>
        </div>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\projet-exam\resources\views/home.blade.php ENDPATH**/ ?>