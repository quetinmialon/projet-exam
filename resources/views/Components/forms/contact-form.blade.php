<section class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
    @if (session()->has('text'))
        <p class="text-green-500 text-center mb-4">{{ session('text') }}</p>
    @endif
    <form method="POST" action="{{ route('send.mail') }}" class="space-y-4">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nom Complet</label>
            <input type="text" id="name" name="name" placeholder="Votre nom complet" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-lime-200 focus:outline-none focus:border-lime-300">
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Adresse email</label>
            <input type="email" id="email" name="email" placeholder="Votre adresse email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-lime-200 focus:outline-none focus:border-lime-300">
        </div>
        <div>
            <label for="msg" class="block text-sm font-medium text-gray-700">Message</label>
            <textarea id="msg" name="msg" rows="4" placeholder="Votre message ici" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-lime-200 focus:outline-none focus:border-lime-300"></textarea>
        </div>
        <button type="submit" class="w-full bg-lime-600 text-white py-2 px-4 rounded-md hover:bg-lime-700 transition duration-300 ease-in-out">Envoyer le message</button>
    </form>
</section>


