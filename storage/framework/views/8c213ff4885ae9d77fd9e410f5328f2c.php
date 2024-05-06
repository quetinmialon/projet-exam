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
<?php /**PATH C:\laragon\www\projet-exam\resources\views/about.blade.php ENDPATH**/ ?>