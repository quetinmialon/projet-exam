<x-layout-admin>
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
                    @foreach($orders as $order)
                    <tr class="border-b hover:bg-orange-100 bg-gray-100 even:bg-slate-200">
                        <td class="p-3 px-5">{{ $order['id'] }}</td>
                        <td class="p-3 px-5">{{ $order['totalPrice'] }} €</td> 
                        <td class="p-3 px-5">{{ $order['paymentMethod'] }}</td>                   
                        <td class="p-3 px-5">{{ $order['user_email'] }}</td>
                        <td class="p-3 px-5">{{ $order['adress'] }}</td>
                        <td class="p-3 px-5 flex flex-col">
                            <button type="button" onclick="toggleDetails({{ $loop->index }})" class="text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Consulter</button>
                            <div id="orderDetails{{ $loop->index }}" class="hidden mt-4">
                                <h2 class="text-lg font-semibold mb-2">Détails de la Commande</h2>
                                <ul>
                                    @foreach($order['products'] as $product)
                                        <li>{{ $product['productName'] }} - Quantité: {{ $product['quantity'] }} - Id : {{$product['productId']}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </td> 
                        <td class="p-3 px-5">
                            <form action="/backOffice/orders/{{$order['id']}}" method="POST">
                                @csrf
                                <select name="status" class="p-2 border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" onchange="this.form.submit()">
                                    <option value="waiting" {{ $order['status'] === 'waiting' ? 'selected' : '' }}>En attente</option>
                                    <option value="delivered" {{ $order['status'] === 'delivered' ? 'selected' : '' }}>Livré</option>
                                    <option value="canceled" {{ $order['status'] === 'canceled' ? 'selected' : '' }}>Annulé</option>
                                </select>
                            </form>
                        </td>
                    </tr>
                    @endforeach
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
</x-layout-admin>

