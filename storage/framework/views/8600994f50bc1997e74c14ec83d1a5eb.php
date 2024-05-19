
<?php if($user): ?>
<div class="flex justify-between items-center bg-slate-100 text-3xl p-4">
    <div class="flex items-center gap-4">
        <a href="/">
            <img src="/img/smashup-logo.png" alt="logo" class="h-16 w-auto">
        </a>
    </div>

    <button id="menu-toggle" class="block md:hidden">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-lime-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="3" y1="12" x2="21" y2="12"></line>
        <line x1="3" y1="6" x2="21" y2="6"></line>
        <line x1="3" y1="18" x2="21" y2="18"></line>
    </svg>

    </button>

    
    <div id="mobile-menu" class="md:hidden hidden">
        <form method="GET" action="/" class="flex items-center">
            <input type="text" name="search" value="<?php echo e(app('request')->input('search')); ?>" class="w-48 bg-white border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:ring focus:ring-lime-600 focus:border-lime-600">
            <button type="submit" class="text-sm bg-lime-600 text-white py-2 px-4 rounded-md hover:bg-lime-700 transition duration-300 ease-in-out">
                Recherche
            </button>
        </form>
        <a href="/about" class="block py-2 px-4 text-lime-600 hover:bg-lime-100 hover:text-lime-700 transition duration-300 ease-in-out">
            Extensions
        </a>
        <a href="/rules" class="block py-2 px-4 text-lime-600 hover:bg-lime-100 hover:text-lime-700 transition duration-300 ease-in-out">
            Règles
        </a>
        <a href="/contactUs" class="block py-2 px-4 text-lime-600 hover:bg-lime-100 hover:text-lime-700 transition duration-300 ease-in-out">
            Contact
        </a>
        <a href="/basket" class="block py-2 px-4 text-lime-600 hover:bg-lime-100 hover:text-lime-700 transition duration-300 ease-in-out">
            Panier
        </a>
        <a href="/userProfile" class="block py-2 px-4 text-lime-600 hover:bg-lime-100 hover:text-lime-700 transition duration-300 ease-in-out">
            Profil
        </a>
        <a href="/logout" class="inline-block py-2 px-4 bg-lime-600 text-white hover:bg-lime-700 transition duration-300 ease-in-out rounded-full">
            Deconnexion
        </a>
        
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let menuToggle = document.getElementById('menu-toggle');
        let mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
<?php else: ?>
    <?php if (isset($component)) { $__componentOriginalec25528f59f295a7fe2b16271999094c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec25528f59f295a7fe2b16271999094c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.headerMobile-logout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('headerMobile-logout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalec25528f59f295a7fe2b16271999094c)): ?>
<?php $attributes = $__attributesOriginalec25528f59f295a7fe2b16271999094c; ?>
<?php unset($__attributesOriginalec25528f59f295a7fe2b16271999094c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec25528f59f295a7fe2b16271999094c)): ?>
<?php $component = $__componentOriginalec25528f59f295a7fe2b16271999094c; ?>
<?php unset($__componentOriginalec25528f59f295a7fe2b16271999094c); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\projet-exam\resources\views/components/headerMobile.blade.php ENDPATH**/ ?>