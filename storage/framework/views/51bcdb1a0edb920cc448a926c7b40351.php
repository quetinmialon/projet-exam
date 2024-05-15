
<?php if (isset($component)) { $__componentOriginal2e6fb18f75884c4fed4e10444e669251 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e6fb18f75884c4fed4e10444e669251 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout-admin','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout-admin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<div class="text-gray-900 bg-gray-200">
    <div class="p-4 flex">
        <h1 class="text-3xl">Users</h1>
    </div>
    <div class="px-3 py-4 flex overflow-x-scroll md:overflow-x-hidden">
        <table class="w-full text-md bg-white shadow-md rounded mb-4 ">
            <tbody>
                <tr class="border-b hover:bg-orange-100 bg-gray-100 even:bg-slate-200">
                    <th class="text-left p-3 px-5">Name</th>
                    <th class="text-left p-3 px-5">Email</th>
                    <th class="text-left p-3 px-5">Role</th>
                    <th class="text-left p-3 px-5">Adress</th>
                    <th></th>
                </tr>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">
                        <div class="bg-transparent border-b-2 border-gray-300 py-2"><?php echo e($user['name']); ?></div>
                    </td>
                    <td class="p-3 px-5">
                    <div class="bg-transparent border-b-2 border-gray-300 py-2"><?php echo e($user['email']); ?></div>
                    </td>
                    <td class="p-3 px-5">
                        <div><?php echo e($user['admin']? 'admin' : 'user'); ?></div>
                    </td>
                    <td class="p-3 px-5 flexjustify-end">
                    <div class="bg-transparent border-b-2 border-gray-300 py-2"><?php echo e($user['adress']); ?></div>
                    </td>       
                    <td class="p-3 px-5 flex justify-end">
                        <a href="/backOffice/user/<?php echo e($user['id']); ?>"><button  class=" mr-3 text-sm bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button></</a>
                        <a href="/backOffice/userDelete/<?php echo e($user['id']); ?>"><button  class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

    </div>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e6fb18f75884c4fed4e10444e669251)): ?>
<?php $attributes = $__attributesOriginal2e6fb18f75884c4fed4e10444e669251; ?>
<?php unset($__attributesOriginal2e6fb18f75884c4fed4e10444e669251); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e6fb18f75884c4fed4e10444e669251)): ?>
<?php $component = $__componentOriginal2e6fb18f75884c4fed4e10444e669251; ?>
<?php unset($__componentOriginal2e6fb18f75884c4fed4e10444e669251); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\projet-exam\resources\views/backOffice/users/usersList.blade.php ENDPATH**/ ?>