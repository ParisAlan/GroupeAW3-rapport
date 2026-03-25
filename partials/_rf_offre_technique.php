<section id="offre-technique" class="rf-section">
    <div class="container">
        <div class="rf-section-header">
            <span class="rf-section-number">08</span>
            <h2 class="rf-section-title">Offre technique / Proposition V1</h2>
        </div>
        <div class="rf-content">

            <h3 class="rf-subtitle">Pré-requis / contraintes techniques</h3>
            <p>Pour faire tourner le projet, il faut un serveur compatible PHP 8.1 minimum avec Composer installé, une base de données MySQL, et un environnement compatible Symfony 6. Côté navigateur, le site fonctionne sur les versions récentes de Chrome, Firefox et Edge. Aucune installation n'est requise de la part de l'utilisateur final puisque tout est accessible via un simple navigateur web.</p>
            <p>Les principales contraintes techniques : respecter le RGPD dans la collecte des données (consentement explicite, stockage sécurisé), sécuriser les mots de passe avec bcrypt, et garantir un affichage correct sur mobile, tablette et ordinateur (responsive). Le questionnaire est maintenu sous 5 minutes pour ne pas perdre l'utilisateur en route.</p>

            <h3 class="rf-subtitle">Profil de la solution globale</h3>
            <p>MyGreen Campus est une application web développée avec le framework PHP Symfony côté back-end, en suivant une architecture MVC. Le moteur de templates Twig gère l'affichage, et la base de données MySQL est manipulée via Doctrine ORM. Le front-end est réalisé en HTML, CSS et JavaScript, sans framework JS supplémentaire.</p>

            <div class="rf-pages-grid">
                <div class="rf-page-item">
                    <span class="rf-page-icon">🏠</span>
                    <div>
                        <strong>Page d'accueil (index)</strong>
                        <p>Point d'entrée : présente le concept de la plateforme et oriente l'utilisateur vers les différentes sections grâce à des boutons d'appel à l'action.</p>
                    </div>
                </div>
                <div class="rf-page-item">
                    <span class="rf-page-icon">📝</span>
                    <div>
                        <strong>Le questionnaire</strong>
                        <p>Pièce centrale du site. Découpé en plusieurs sections : transports, logement, vie étudiante. Un calculateur traite les données saisies à travers quatre étapes : transports, logement, numérique, puis alimentation.</p>
                    </div>
                </div>
                <div class="rf-page-item">
                    <span class="rf-page-icon">📊</span>
                    <div>
                        <strong>Le tableau de bord</strong>
                        <p>Affiche les résultats sous forme visuelle avec divers tableaux permettant une compréhension et une comparaison plus facile.</p>
                    </div>
                </div>
                <div class="rf-page-item">
                    <span class="rf-page-icon">👤</span>
                    <div>
                        <strong>Mon profil</strong>
                        <p>Regroupe les informations personnelles de l'étudiant, son université et les badges débloqués. Une page Paramètres lui permet de modifier ses données personnelles pour recalculer son empreinte carbone.</p>
                    </div>
                </div>
                <div class="rf-page-item">
                    <span class="rf-page-icon">🌱</span>
                    <div>
                        <strong>Espace Actions & Défis</strong>
                        <p>Propose une liste de défis en cours mis en place.</p>
                    </div>
                </div>
                <div class="rf-page-item">
                    <span class="rf-page-icon">📰</span>
                    <div>
                        <strong>Pages complémentaires</strong>
                        <p>Actualités (informations et liens utiles), Contact (formulaire, adresse, mail).</p>
                    </div>
                </div>
            </div>

            <h3 class="rf-subtitle">Tests fonctionnels mis en œuvre</h3>
            <p>On a testé manuellement les principaux parcours utilisateurs : inscription complète en 5 étapes sans erreur SQL, connexion / déconnexion, modification des données de profil, et affichage du tableau de bord. On a aussi vérifié le rendu sur différentes tailles d'écran (téléphone, tablette, PC) pour s'assurer que le responsive fonctionnait bien.</p>

            <h3 class="rf-subtitle">Estimation des moyens matériels et humains pour la maintenance</h3>
            <p>Côté matériel, notre application tourne sur une stack PHP 8.3, Symfony 6, MySQL, ce qui ne nécessite pas une infrastructure lourde. Avec des technologies aussi répandues que PHP et MySQL, un hébergement mutualisé suffit pour une application de petite envergure. Des solutions comme O2switch (autour de 5-6€/mois) ou OVH permettent de faire tourner une app Symfony sans problème pour un trafic limité. Si le projet venait à grandir avec plus d'utilisateurs, un VPS offrirait plus de contrôle et de ressources dédiées, avec une meilleure capacité de montée en charge, mais c’est pas nécessaire pour notre V1.</p>
            <p>Côté humain, dans l'état actuel du projet, une seule personne ayant une bonne connaissance de la stack (Symfony, MySQL, Doctrine) serait suffisante pour assurer la maintenance courante comme par exemple corriger des bugs, faire les mises à jour de sécurité, ou même modifier des données dans la base via PhpMyAdmin. Les deux points qui demanderaient le plus de travail pour continuer le projet serait de finaliser le système de validation des défis et le calcul des points associés, et d'améliorer l'algorithme de calcul carbone, qui repose pour l'instant sur des valeurs simplifiées sans intégration d'API externe. Ces deux chantiers nécessitent probablement une petite équipe similaire à celle du projet pour être menés correctement.</p>
            <p>En anticipant les problèmes potentiels, plusieurs points sont à surveiller. Du côté de l'hébergeur, une interruption de service ou une migration forcée de serveur pourrait rendre le site temporairement inaccessible, c’est là où l'intérêt de mettre en place des sauvegardes régulières de la base de données. Côté SGBD, MySQL peut poser des problèmes de performances si la base grossit sans optimisation, notamment sur les requêtes liées au calcul carbone. Il faudrait aussi anticiper les mises à jour de PHP et de Symfony, qui pourraient introduire des incompatibilités avec le code existant si elles ne sont pas faites progressivement. Et enfin, les deux points qui demandent le plus de travail pour faire évoluer le projet sont la finalisation du système de validation des défis et l’amélioration de l’algorithme de calcul carbone, qui repose pour l’instant sur des valeurs simplifiées. </p>
        </div>
    </div>
</section>