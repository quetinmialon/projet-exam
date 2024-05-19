


<x-layout title="Smash Up | register form">
    <body>
    <section class="container mx-auto py-16">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="text-lg bg-lime-600 text-white py-4 px-6 font-semibold">Inscription</div>

            <div class="px-6 py-4">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                        <input id="name" type="text" class="form-input mt-1 block w-full rounded-md shadow-sm focus:border-lime-600 focus:ring focus:ring-lime-600 focus:ring-opacity-50 @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Adresse E-Mail</label>
                        <input id="email" type="email" class="form-input mt-1 block w-full rounded-md shadow-sm focus:border-lime-600 focus:ring focus:ring-lime-600 focus:ring-opacity-50 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                        <input id="password" type="password" class="form-input mt-1 block w-full rounded-md shadow-sm focus:border-lime-600 focus:ring focus:ring-lime-600 focus:ring-opacity-50 @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="block text-sm font-medium text-gray-700">{{ __('Confirmer le mot de passe') }}</label>
                        <input id="password-confirm" type="password" class="form-input mt-1 block w-full rounded-md shadow-sm focus:border-lime-600 focus:ring focus:ring-lime-600 focus:ring-opacity-50" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex items-center justify-center">
                        <button type="submit" class="bg-lime-600 text-white px-4 py-2 rounded-md hover:bg-lime-700 focus:outline-none focus:bg-lime-700">
                            S'inscrire
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
