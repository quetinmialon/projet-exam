<div class="flex justify-between items-center bg-slate-100 text-3xl p-4">
    <a href="/">
        <img src="/img/smashup-logo.png" alt="logo" class="h-16 w-auto">
    </a>
    <div class="flex gap-4">
        <a href="/about">
            <button class="bg-transparent text-lime-600 py-2 px-4 rounded-full hover:bg-lime-100 hover:text-lime-700 transition duration-300 ease-in-out">
            Extensions
            </button>
        </a>
        <a href="/rules">
            <button class="bg-transparent text-lime-600 py-2 px-4 rounded-full hover:bg-lime-100 hover:text-lime-700 transition duration-300 ease-in-out">
                Règles
            </button>
        </a>
        <a href="/contactUs">
            <button class="bg-transparent text-lime-600 py-2 px-4 rounded-full hover:bg-lime-100 hover:text-lime-700 transition duration-300 ease-in-out">
                Contact
            </button>
        </a>

    </div>
    <div class="flex items-center gap-4">
        <form method="GET" action="/" class="flex items-center">
            <label for="search" class="hidden">Recherche</label>
            <input type="text" name="search" value="<?php echo e(app('request')->input('search')); ?>" class="bg-white border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:ring focus:ring-lime-600 focus:border-lime-600">
            <button type="submit" class="bg-lime-600 text-white py-2 px-4 rounded-md hover:bg-lime-700 transition duration-300 ease-in-out">
                Recherche
            </button>
        </form>
        <a href="/login">
            <button class="bg-transparent p-2 rounded-full hover:bg-lime-100 hover:text-lime-700 transition duration-300 ease-in-out">
                Connexion
            </button>
        </a>
        <a href="/register">
            <button class="bg-lime-600 text-white py-2 px-4 rounded-full hover:bg-lime-700 transition duration-300 ease-in-out">
                Inscription
            </button>
        </a>
    </div>
</div>

<?php /**PATH C:\laragon\www\projet-exam\resources\views/components/header-logout.blade.php ENDPATH**/ ?>