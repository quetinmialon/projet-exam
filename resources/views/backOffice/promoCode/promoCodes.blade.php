<x-layout-admin>
    <div class="text-gray-900 bg-gray-200">
        <div class="p-4 flex items-center justify-between">
            <h1 class="text-3xl">Promo Codes</h1>
            <form action='/backOffice/promoCode/add' method="post" class="flex">
                @csrf
                <div class="mr-2">
                    <input type="text" name="label" id="label" class="p-2 border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Nom du Code" required>
                </div>
                <div class="mr-2">
                    <input type="number" name="value" id="value" step="0.01" class="p-2 border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Montant du Code" required>
                </div>
                <div class="mr-2">
                    <select name="type" id="type" class="p-2 border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                        <option value="percentage">Pourcentage</option>
                        <option value="flat">Euros</option>
                    </select>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Ajouter Code Promo</button>
            </form>
        </div>

        <div class="px-3 py-4 flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <tbody>
                    <tr class="border-b hover:bg-orange-100 bg-gray-100 even:bg-slate-200">
                        <th class="text-left p-3 px-5">Label</th>
                        <th class="text-left p-3 px-5">Type</th>
                        <th class="text-left p-3 px-5">Value</th>
                        <th class="text-left p-3 px-5">Actions</th>
                    </tr>
                    @foreach($promoCodes as $promoCode)
                    <tr class="border-b hover:bg-orange-100 bg-gray-100">
                        <td class="p-3 px-5">{{$promoCode['label']}}</td>
                        <td class="p-3 px-5">{{$promoCode['type']}}</td>
                        <td class="p-3 px-5">
                            @if($promoCode['type'] === 'flat')
                                {{$promoCode['value']}} €
                            @elseif($promoCode['type'] === 'percentage')
                                {{$promoCode['value']}} %
                            @endif
                        </td>
                        <td class="p-3 px-5 flex">
                                <a href="/backOffice/deletPromoCode/{{$promoCode['label']}}"><button class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">supprimer</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout-admin>
