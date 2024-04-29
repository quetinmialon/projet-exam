<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
       <div class="max-w-96 mx-auto bg-white shadow-md rounded-lg mb-4"> 
          
           
           <img class="w-full h-auto" src="<?php echo e($product['img']); ?>" alt="<?php echo e($product['name']); ?>">
           <div class="px-4 py-2">
               <div class="font-bold text-xl mb-2"><?php echo e($product['name']); ?> </div>
               <p class="text-gray-700 text-base"><?php echo e($product['description']); ?></p>
           </div>
           <div class="px-4 py-2">
               <span class="text-gray-900 font-bold"><?php echo e($product['price']); ?> €</span>
           </div>      
           <a href='products/<?php echo e($product['id']); ?>'><button >modifier le produit</button></a>
       </div>


   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\laragon\www\projet-exam\resources\views//backOffice/products/products.blade.php ENDPATH**/ ?>