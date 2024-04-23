
<div class="flex flex-row w-full justify-between text-3xl bg-slate-100">
        <a href="/">
            <div>
                <img src="/img/smashup-logo.png" alt="logo" class="h-16 w-48 self-center">
            </div>
        </a>
        <div class="flex flex-row self-center gap-2">
            <a href="/about">
                <button class="self-center text-lime-600 p-2 rounded-full hover:saturate-200">
                    A Propos
                </button>
            </a>
            <a href="/rules">
                <button class="self-center text-lime-600 p-2 rounded-full hover:saturate-200">
                    Règles
                </button>
            </a>
            <a href="/contactUs">
                <button class="self-center  p-2 rounded-full text-lime-600 hover:saturate-200">
                    Contact
                </button>
            </a>
        </div>
        <div>
            <form method="GET" url='/'>
                <label for="search">
                    <input type="text" name="search" value="<?php echo e(app('request')->input('search')); ?>">
                </label>
                <button>recherche</button>
            </form>
        </div>

        <div class="flex flex-row p-2 self-center gap-2">
            <a href="/basket" id="btn-panier" class="p-2 "><img src="/img/panier.png" alt="logo panier" class="h-12 w-12 self-center"></a>
            <a href="/logout" class="p-2 "><img src="/img/utilisateur.png" alt="logo profil" class="h-12 w-12 self-center" ></a>
        </div>
    </div>

    

<?php /**PATH C:\laragon\www\projet-exam\resources\views/components/header.blade.php ENDPATH**/ ?>