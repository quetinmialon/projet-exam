<x-layout title="Smash Up | {{$user['name']}} update form">
<div class="container mx-auto max-w-md mt-10">
        <h1 class="text-2xl font-bold mb-6">Modifier le Profil</h1>
        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('updateName') }}" class="mb-4">
            @csrf
            <label for="name" class="block mb-2">Nom :</label>
            <input type="text" id="name" name="name" value="{{ $user['name'] }}" class="w-full border-gray-300 rounded-md px-4 py-2">
            <button type="submit" class="mt-2 bg-lime-600 text-white px-4 py-2 rounded-md hover:bg-lime-700 focus:outline-none focus:bg-lime-700">Modifier Nom</button>
        </form>

        <!-- Formulaire de modification de l'adresse -->
        <form method="POST" action="{{ route('updateAdress') }}" class="mb-4">
            @csrf
            <label for="adress" class="block mb-2">Adresse :</label>
            <input type="text" id="adress" name="adress" value="{{ $user['adress'] }}" class="w-full border-gray-300 rounded-md px-4 py-2">
            <button type="submit" class="mt-2 bg-lime-600 text-white px-4 py-2 rounded-md hover:bg-lime-700 focus:outline-none focus:bg-lime-700">Modifier Adresse</button>
        </form>

        <!-- Formulaire de modification du mot de passe -->
        <form method="POST" action="{{ route('updatePassword') }}">
            @csrf
            <label for="password" class="block mb-2">Mot de passe :</label>
            <input type="password" id="password" name="password" class="w-full border-gray-300 rounded-md px-4 py-2 @error('password') bg-red-100 @enderror">
            @error('password')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
            <button type="submit" class="mt-2 bg-lime-600 text-white px-4 py-2 rounded-md hover:bg-lime-700 focus:outline-none focus:bg-lime-700">Modifier Mot de passe</button>
        </form>
</div>
</x-layout>