<x-layout title="Smash Up | payment info">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
        <form method="post" action="/orderCreate" class="space-y-4">
            @csrf
            <input type="hidden" name="price" value="{{ intval($price) }}">
            
            <label for="paymentMethod" class="block text-sm font-medium text-gray-700">Choisissez votre moyen de paiement</label>
            <select name="paymentMethod" id="paymentMethod" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:outline-none focus:border-indigo-300">
                <option value="CB">Carte Bancaire</option>
                <option value="Paypal">Paypal</option>
            </select>

            <label for="adress" class="block text-sm font-medium text-gray-700">Entrez votre adresse</label>
            <input type="text" name="adress" id="address" placeholder="Votre adresse" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:outline-none focus:border-indigo-300" required>

            <input type="hidden" name="status" value="waiting">

            <div class="text-gray-700">Prix total : {{ $price }}</div>

            <button type="submit" class="w-full bg-lime-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition duration-300 ease-in-out">Payer</button>
        </form>
    </div>
</x-layout>
