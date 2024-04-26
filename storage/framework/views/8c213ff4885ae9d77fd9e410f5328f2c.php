<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
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
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">Liste des Extensions Smash Up</h1>
        
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Extensions</h2>
            <ul class="list-disc list-inside mt-4">
                <li>Smash Up - Même pas mort (2013)</li>
                <li>Smash Up - Cthulhu Fhtagn (2014)</li>
                <li>Smash Up - Séries B (2014)</li>
                <li>Smash Up - Trop Minions (2015)</li>
                <li>Smash Up - Monstres sacrés (2015)</li>
                <li>Smash Up - Ressemblances fortuites (2017)</li>
                <li>Smash Up - Vous l’aurez voulu ! (2017)</li>
                <li>Smash Up - Conflit de générations (2017)</li>
                <li>Smash Up - Rois du Japon (2018)</li>
                <li>Smash Up – Ces années-là (2019)</li>
                <li>Smash Up – Vous en voulez encore ? (2020)</li>
                <li>Smash Up – Tournée mondiale : Incident diplomatique (2021)</li>
                <li>Smash Up - Tournée mondiale : Choc des cultures (2022)</li>
                <li>Smash Up - Munchkin (2016)</li>
                <li>Smash Up - Marvel (2022)</li>
                <li>Smash Up - Disney (VO : 2022)</li>
            </ul>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-gray-800">Accessoires</h2>
            <ul class="list-disc list-inside mt-4">
                <li>Smash Up - La grosse boîte pour Geek (2015)</li>
                <li>Smash Up – L’Énorme boîte pour Geek (2020)</li>
            </ul>
        </div>
    </div>
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
</html><?php /**PATH C:\laragon\www\projet-exam\resources\views/about.blade.php ENDPATH**/ ?>