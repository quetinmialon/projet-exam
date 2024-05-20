
<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve(['title' => 'Smash Up | rules'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <body class="bg-gray-100 p-4">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-4">Règles du jeu Smash Up</h1>
        
        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Introduction</h2>
            <p>Smash Up est un jeu de cartes compétitif pour 2 à 4 joueurs, où chaque joueur incarne une faction unique et tente de conquérir des bases pour marquer des points. Le jeu se compose de différents paquets de cartes représentant des factions telles que les pirates, les robots, les zombies, les ninjas, les dinosaures, les sorciers, etc.</p>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Matériel</h2>
            <ul class="list-disc ml-6">
                <li>Cartes de factions : Chaque faction possède un paquet de cartes avec des pouvoirs spéciaux et des synergies uniques.</li>
                <li>Cartes de base : Les cartes de base sont disposées au centre de la table et représentent les endroits à conquérir pour marquer des points.</li>
                <li>Pions de points : Chaque joueur utilise des marqueurs ou des jetons pour suivre son score.</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Objectif du jeu</h2>
            <p>Le but de Smash Up est de marquer le plus de points en contrôlant des bases. Les joueurs marquent des points en fonction des factions qu'ils ont déployées sur une base au moment de sa destruction.</p>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Déroulement d'un tour</h2>
            <ol class="list-decimal ml-6">
                <li>Piocher des cartes : Au début de votre tour, piochez deux cartes de votre deck.</li>
                <li>Jouer des cartes :
                    <ul class="list-disc ml-6">
                        <li>Vous pouvez jouer jusqu'à une carte de faction de votre main sur une base au centre de la table.</li>
                        <li>Les cartes de faction peuvent être des personnages (minions) ou des actions.</li>
                        <li>Les minions ont un coût en points de force et des capacités spéciales qui affectent le jeu.</li>
                        <li>Les actions ont des effets immédiats ou permanents qui peuvent modifier le cours du jeu.</li>
                    </ul>
                </li>
                <li>Défausser des cartes : À la fin de votre tour, défaussez toutes les cartes en excès de votre main.</li>
                <li>Fin du tour : Passez au joueur suivant dans le sens des aiguilles d'une montre.</li>
            </ol>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Contrôle des bases</h2>
            <ul class="list-disc ml-6">
                <li>Chaque base a un seuil de force qui doit être atteint pour la conquérir.</li>
                <li>Les joueurs contribuent à la force d'une base en déployant des minions sur cette base.</li>
                <li>Une fois que la force totale des minions atteint ou dépasse le seuil de la base, la base est détruite.</li>
                <li>Les joueurs marquent des points en fonction de la force totale de leurs minions sur la base au moment de sa destruction.</li>
                <li>Certains effets de cartes peuvent influencer la force d'une base ou la distribution des points.</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Fin de partie</h2>
            <p>Le jeu se termine lorsque le total de points requis est atteint (généralement déterminé en fonction du nombre de joueurs). Le joueur avec le plus de points à la fin de la partie est déclaré vainqueur.</p>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Stratégies clés</h2>
            <ul class="list-disc ml-6">
                <li>Synergies de faction : Exploitez les synergies entre les factions pour maximiser l'efficacité de vos cartes.</li>
                <li>Contrôle des bases : Choisissez stratégiquement les bases à attaquer et déployez vos forces pour marquer des points.</li>
                <li>Gestion de main : Gérez votre main de cartes pour optimiser vos actions à chaque tour.</li>
            </ul>
        </section>

        <section>
            <h2 class="text-2xl font-bold mb-4">Variantes et extensions</h2>
            <p>Smash Up propose plusieurs extensions et variantes qui ajoutent de nouvelles factions, cartes et mécaniques de jeu pour une expérience toujours renouvelée.</p>
        </section>

    </div>

    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>

<?php /**PATH C:\laragon\www\projet-exam\resources\views/rules.blade.php ENDPATH**/ ?>