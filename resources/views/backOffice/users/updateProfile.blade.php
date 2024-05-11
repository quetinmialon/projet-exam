<x-layout-admin>
<div class="max-w-lg mx-auto mt-10 p-6 rounded shadow">
        <h2 class="text-lg font-semibold mb-4">Modifier le profil utilisateur</h2>
        <form action="/backOffice/updateUser/{{$user['id']}}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Adresse e-mail</label>
                <p class="mt-1 px-4 py-2 block w-full border-gray-300 rounded-md bg-gray-100">{{ $user['email'] }}</p>
            </div>
            
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                <input type="text" id="name" name="name" value="{{ $user['name'] }}" class="mt-1 px-4 py-2 block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            
            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-700">Adresse</label>
                <input type="text" id="address" name="adress" value="{{ $user['adress'] }}" class="mt-1 px-4 py-2 block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
             
            <div class="mb-4">
                <label for="admin" class="block text-sm font-medium text-gray-700">Rôle</label>
                <select id="role" name="admin" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @if($user['admin'] == 1) 
                        <option value="1" selected>Administrateur</option>
                        <option value="0">Utilisateur</option>
                    @else
                        <option value="1">Administrateur</option>
                        <option value="0" selected>Utilisateur</option>
                    @endif
                </select>
            </div>      
            <div class="flex justify-end">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
</x-layout-admin>