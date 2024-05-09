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
<div class="container mx-auto max-w-md mt-10">
        <h1 class="text-2xl font-bold mb-6">Modifier le Profil</h1>
        <?php if($errors->any()): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('updateName')); ?>" class="mb-4">
            <?php echo csrf_field(); ?>
            <label for="name" class="block mb-2">Nom :</label>
            <input type="text" id="name" name="name" value="<?php echo e($user['name']); ?>" class="w-full border-gray-300 rounded-md px-4 py-2">
            <button type="submit" class="mt-2 bg-lime-600 text-white px-4 py-2 rounded-md hover:bg-lime-700 focus:outline-none focus:bg-lime-700">Modifier Nom</button>
        </form>

        <!-- Formulaire de modification de l'adresse -->
        <form method="POST" action="<?php echo e(route('updateAdress')); ?>" class="mb-4">
            <?php echo csrf_field(); ?>
            <label for="adress" class="block mb-2">Adresse :</label>
            <input type="text" id="adress" name="adress" value="<?php echo e($user['adress']); ?>" class="w-full border-gray-300 rounded-md px-4 py-2">
            <button type="submit" class="mt-2 bg-lime-600 text-white px-4 py-2 rounded-md hover:bg-lime-700 focus:outline-none focus:bg-lime-700">Modifier Adresse</button>
        </form>

        <!-- Formulaire de modification du mot de passe -->
        <form method="POST" action="<?php echo e(route('updatePassword')); ?>">
            <?php echo csrf_field(); ?>
            <label for="password" class="block mb-2">Mot de passe :</label>
            <input type="password" id="password" name="password" class="w-full border-gray-300 rounded-md px-4 py-2 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> bg-red-100 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-xs italic"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <button type="submit" class="mt-2 bg-lime-600 text-white px-4 py-2 rounded-md hover:bg-lime-700 focus:outline-none focus:bg-lime-700">Modifier Mot de passe</button>
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
<?php endif; ?><?php /**PATH C:\laragon\www\projet-exam\resources\views/auth/userProfileUpdate.blade.php ENDPATH**/ ?>