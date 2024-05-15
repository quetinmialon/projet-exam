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
        <div class="p-4 flex flex-row justify-between">
            <div>
                <h1 class="text-3xl">Liste des Commandes</h1>
            </div>
            <div class="flex space-x-4">
                <input type="text" id="searchInput" placeholder="Rechercher par numéro de commande" class="p-2 border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                <button onclick="searchOrders()" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Rechercher</button>
            </div>
        </div>
        <div class="p-4 flex justify-between items-center">
            <div>
                <button onclick="filterOrders('waiting')" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-700 focus:outline-none focus:bg-yellow-700">Commandes en Attente</button>
                <button onclick="filterOrders('delivered')" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Commandes Livrées</button>
                <button onclick="filterOrders('canceled')" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700">Commandes Annulées</button>
                <button onclick="clearFilters()" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Effacer les Filtres</button>
            </div>
        </div>
        <div class="px-3 py-4">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <thead>
                    <tr class="border-b">
                        <th class="text-left p-3 px-5">Numéro de Commande</th>
                        <th class="text-left p-3 px-5">Montant Total</th>  
                        <th class="text-left p-3 px-5">Moyen de paiement</th>               
                        <th class="text-left p-3 px-5">Adresse Email</th>
                        <th class="text-left p-3 px-5">Adresse</th>
                        <th class="text-left p-3 px-5">Actions</th>
                        <th class="text-left p-3 px-5">Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="border-b hover:bg-orange-100 bg-gray-100 even:bg-slate-200">
                        <td class="p-3 px-5"><?php echo e($order['id']); ?></td>
                        <td class="p-3 px-5"><?php echo e($order['totalPrice']); ?> €</td> 
                        <td class="p-3 px-5"><?php echo e($order['paymentMethod']); ?></td>                   
                        <td class="p-3 px-5"><?php echo e($order['user_email']); ?></td>
                        <td class="p-3 px-5"><?php echo e($order['adress']); ?></td>
                        <td class="p-3 px-5 flex flex-col">
                            <button type="button" onclick="toggleDetails(<?php echo e($loop->index); ?>)" class="text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Consulter</button>
                            <div id="orderDetails<?php echo e($loop->index); ?>" class="hidden mt-4">
                                <h2 class="text-lg font-semibold mb-2">Détails de la Commande</h2>
                                <ul>
                                    <?php $__currentLoopData = $order['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($product['productName']); ?> - Quantité: <?php echo e($product['quantity']); ?> - Id : <?php echo e($product['productId']); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </td> 
                        <td class="p-3 px-5">
                            <form action="/backOffice/orders/<?php echo e($order['id']); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <select name="status" class="p-2 border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" onchange="this.form.submit()">
                                    <option value="waiting" <?php echo e($order['status'] === 'waiting' ? 'selected' : ''); ?>>En attente</option>
                                    <option value="delivered" <?php echo e($order['status'] === 'delivered' ? 'selected' : ''); ?>>Livré</option>
                                    <option value="canceled" <?php echo e($order['status'] === 'canceled' ? 'selected' : ''); ?>>Annulé</option>
                                </select>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
  
    <script>
        function toggleDetails(index) {
            const detailsContainer = document.getElementById(`orderDetails${index}`);
            detailsContainer.classList.toggle('hidden');
        }
        function searchOrders() {
            const searchTerm = document.getElementById('searchInput').value.trim().toLowerCase();
            filterOrdersByCriteria(row => {
                const orderNumber = row.cells[0].textContent.trim().toLowerCase();
                return orderNumber.includes(searchTerm);
            });
        }

       




        function clearFilters() {
            const rows = document.querySelectorAll('tbody tr');
            rows.forEach(row => {
                row.style.display = '';
            });
        }
        function filterOrders(status) {
            filterOrdersByCriteria(row => {
                const selectElement = row.cells[6].querySelector('select');
                const selectedValue = selectElement.value.trim().toLowerCase();
                console.log(selectedValue)
                return selectedValue === status.toLowerCase();
        });}

        function filterOrdersByCriteria(criteriaFunction) {
            const rows = document.querySelectorAll('tbody tr');
            rows.forEach(row => {
                if (criteriaFunction(row)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e6fb18f75884c4fed4e10444e669251)): ?>
<?php $attributes = $__attributesOriginal2e6fb18f75884c4fed4e10444e669251; ?>
<?php unset($__attributesOriginal2e6fb18f75884c4fed4e10444e669251); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e6fb18f75884c4fed4e10444e669251)): ?>
<?php $component = $__componentOriginal2e6fb18f75884c4fed4e10444e669251; ?>
<?php unset($__componentOriginal2e6fb18f75884c4fed4e10444e669251); ?>
<?php endif; ?>

<?php /**PATH C:\laragon\www\projet-exam\resources\views/backOffice/orders/orders.blade.php ENDPATH**/ ?>