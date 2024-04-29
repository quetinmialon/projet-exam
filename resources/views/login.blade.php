<x-layout>
    <div class="container mx-auto py-16">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="text-lg bg-lime-600 text-white py-4 px-6 font-semibold">{{ __('Connexion') }}</div>

            <div class="px-6 py-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Adresse E-Mail') }}</label>
                        <input id="email" type="email" class="form-input mt-1 block w-full rounded-md shadow-sm focus:border-lime-600 focus:ring focus:ring-lime-600 focus:ring-opacity-50 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Mot de passe') }}</label>
                        <input id="password" type="password" class="form-input mt-1 block w-full rounded-md shadow-sm focus:border-lime-600 focus:ring focus:ring-lime-600 focus:ring-opacity-50 @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-lime-600 text-white px-4 py-2 rounded-md hover:bg-lime-700 focus:outline-none focus:bg-lime-700">
                            {{ __('Connexion') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
