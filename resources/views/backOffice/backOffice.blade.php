
<x-layout-admin>


    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-4">Statistiques</h2>
                <ul class="divide-y divide-gray-300">

                    <li class="flex justify-between items-center py-2">
                        <span>Nombre d'utilisateurs inscrits :</span>
                        <span class="font-bold">{{ $totalUsers }}</span>
                    </li>
                    <li class="flex justify-between items-center py-2">
                        <span>Nombre total de commandes passées :</span>
                        <span class="font-bold">{{ $totalOrders }}</span>
                    </li>
                    <li class="flex justify-between items-center py-2">
                        <span>Montant Total des Commandes Passées :</span>
                        <span class="font-bold">{{ $totalOrdersPrice }}€</span>
                    </li>
                    <li class="flex justify-between items-center py-2">
                        <span>Nombre de Produits Différent sur le Site :</span>
                        <span class="font-bold">{{ $totalProducts }}</span>
                    </li>
                    <li class="flex justify-between items-center py-2">
                        <span>Nombre de Codes Promos disponnibles :</span>
                        <span class="font-bold">{{ $totalPromoCodes }}</span>
                    </li>
                </ul>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-4">Navigation rapide</h2>
                <ul class="divide-y divide-gray-300">
                    <li class="py-2"><a href="/backOffice/orders" class="text-blue-600 hover:underline">Consulter les commandes</a></li>
                    <li class="py-2"><a href="/backOffice/products" class="text-blue-600 hover:underline">Gérer les produits</a></li>
                    <li class="py-2"><a href="/backOffice/users" class="text-blue-600 hover:underline">Consulter les utilisateurs</a></li>
                    <li class="py-2"><a href="/backOffice/promoCode" class="text-blue-600 hover:underline">Gérer les codes promo</a></li>
                </ul>
            </div>
        </div>
    </div>
</x-layout-admin>