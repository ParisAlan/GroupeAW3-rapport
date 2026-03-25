<section id="risques" class="rf-section rf-section--green">
    <div class="container">
        <div class="rf-section-header">
            <span class="rf-section-number">05</span>
            <h2 class="rf-section-title">Risques identifiés</h2>
        </div>
        <div class="rf-content">
            <p>La mise en œuvre de la version V1 de <em>MyGreen Campus</em> s'accompagne de plusieurs risques, à la fois techniques, organisationnels et liés à l'expérience utilisateur.</p>
            <p>Durant le projet, certains risques se sont concrètement manifestés : les conflits de fusion de code via Git ont rendu certaines phases de développement plus complexes. De plus, la gestion du temps a constitué un enjeu important, en raison de la coordination entre les emplois du temps et les autres obligations universitaires.</p>
            <p>Sur le plan technique, la connexion entre le front-end et le back-end a représenté une difficulté notable. Par ailleurs, la fiabilité des résultats dépend fortement des données utilisées pour le calcul de l'empreinte carbone. Enfin, des risques liés à l'expérience utilisateur ont été identifiés, notamment le désengagement des utilisateurs si l'outil n'est pas suffisamment attractif ou adapté à leurs attentes.</p>

            <div class="rf-table-wrapper">
                <table class="rf-table">
                    <thead>
                        <tr>
                            <th>Risque</th>
                            <th>Niveau</th>
                            <th>Mesures de mitigation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Désengagement des utilisateurs</td>
                            <td><span class="rf-badge rf-badge--high">Élevé</span></td>
                            <td>Limiter la durée du questionnaire (moins de 5 minutes) et adopter un ton positif</td>
                        </tr>
                        <tr>
                            <td>Manque de crédibilité des données</td>
                            <td><span class="rf-badge rf-badge--high">Élevé</span></td>
                            <td>Utiliser des sources reconnues (ADEME, Base Carbone) et les rendre visibles</td>
                        </tr>
                        <tr>
                            <td>Scope trop large</td>
                            <td><span class="rf-badge rf-badge--medium">Moyen</span></td>
                            <td>Prioriser les fonctionnalités essentielles</td>
                        </tr>
                        <tr>
                            <td>Conformité RGPD</td>
                            <td><span class="rf-badge rf-badge--medium">Moyen</span></td>
                            <td>Mettre en place consentement et sécurisation des données (hachage)</td>
                        </tr>
                        <tr>
                            <td>Recommandations trop génériques</td>
                            <td><span class="rf-badge rf-badge--medium">Moyen</span></td>
                            <td>Améliorer la personnalisation</td>
                        </tr>
                        <tr>
                            <td>Dépendance aux partenariats</td>
                            <td><span class="rf-badge rf-badge--low">Faible</span></td>
                            <td>Ne pas baser le fonctionnement principal dessus</td>
                        </tr>
                        <tr>
                            <td>Conflits de code (Git)</td>
                            <td><span class="rf-badge rf-badge--medium">Moyen</span></td>
                            <td>Mieux organiser les branches et communiquer</td>
                        </tr>
                        <tr>
                            <td>Difficultés techniques (front/back)</td>
                            <td><span class="rf-badge rf-badge--medium">Moyen</span></td>
                            <td>Tester régulièrement et simplifier si nécessaire</td>
                        </tr>
                        <tr>
                            <td>Bugs en production</td>
                            <td><span class="rf-badge rf-badge--medium">Moyen</span></td>
                            <td>Renforcer les phases de test</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section id="indicateurs" class="rf-section">
    <div class="container">
        <div class="rf-section-header">
            <span class="rf-section-number">06</span>
            <h2 class="rf-section-title">Indicateurs de réussite (KPI)</h2>
        </div>
        <div class="rf-content">
            <div class="rf-table-wrapper">
                <table class="rf-table">
                    <thead>
                        <tr>
                            <th>Indicateur</th>
                            <th>Définition</th>
                            <th>Objectif</th>
                            <th>Interprétation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Taux de complétion du parcours utilisateur</strong></td>
                            <td>% d'utilisateurs complétant tout le parcours (inscription → questionnaire → profil)</td>
                            <td>≥ 70 %</td>
                            <td>Mesure l'engagement initial et l'accessibilité du parcours</td>
                        </tr>
                        <tr>
                            <td><strong>Temps moyen de complétion</strong></td>
                            <td>Temps moyen pour remplir le questionnaire</td>
                            <td>≤ 5 min</td>
                            <td>Vérifie que le parcours reste fluide et non contraignant</td>
                        </tr>
                        <tr>
                            <td><strong>Taux d'engagement</strong></td>
                            <td>Nombre moyen de défis réalisés par utilisateur</td>
                            <td>≥ 1 défi / utilisateur</td>
                            <td>Évalue l'implication dans la plateforme</td>
                        </tr>
                        <tr>
                            <td><strong>Taux de rétention</strong></td>
                            <td>% d'utilisateurs revenant après une première utilisation</td>
                            <td>≥ 40 %</td>
                            <td>Mesure l'intérêt et la fidélisation</td>
                        </tr>
                        <tr>
                            <td><strong>Progression utilisateur</strong></td>
                            <td>% d'utilisateurs ayant amélioré leur score carbone</td>
                            <td>≥ 30 %</td>
                            <td>Indique l'impact réel de la plateforme</td>
                        </tr>
                        <tr>
                            <td><strong>Taux d'abandon</strong></td>
                            <td>% d'utilisateurs quittant avant la fin du questionnaire</td>
                            <td>≤ 30 %</td>
                            <td>Permet d'identifier les points bloquants</td>
                        </tr>
                        <tr>
                            <td><strong>Taux de complétion des défis</strong></td>
                            <td>% de défis commencés puis terminés</td>
                            <td>≥ 50 %</td>
                            <td>Mesure la pertinence des défis proposés</td>
                        </tr>
                        <tr>
                            <td><strong>Nombre moyen de sessions</strong></td>
                            <td>Nombre moyen de connexions par utilisateur</td>
                            <td>≥ 2 sessions</td>
                            <td>Indique l'intérêt et l'utilisation répétée</td>
                        </tr>
                        <tr>
                            <td><strong>Satisfaction utilisateur</strong></td>
                            <td>Note moyenne donnée par les utilisateurs</td>
                            <td>≥ 3,5 / 5</td>
                            <td>Évalue la perception globale</td>
                        </tr>
                        <tr>
                            <td><strong>Temps passé sur la plateforme</strong></td>
                            <td>Durée moyenne d'une session</td>
                            <td>≥ 3 min</td>
                            <td>Indique l'intérêt et l'exploration</td>
                        </tr>
                        <tr>
                            <td><strong>Nombre de visiteurs</strong></td>
                            <td>Nombre d'utilisateurs ayant accédé au site sur une semaine</td>
                            <td>≥ 50 utilisateurs / semaine</td>
                            <td>Mesure la visibilité et l'attractivité du site</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p>Les KPI ont été définis pour vérifier si la plateforme <em>MyGreen Campus</em> atteint ses objectifs : être simple à utiliser, engager les utilisateurs et avoir un réel impact.</p>
            <p>Le taux de complétion et le temps de réponse permettent de s’assurer que le questionnaire est accessible et rapide. Le taux d’engagement et le taux de rétention mesurent l’intérêt des utilisateurs et leur implication dans la durée.</p>
            <p>La progression du score carbone est l’indicateur le plus important, car il reflète directement l’impact du projet sur les comportements.</p>
            <p>Enfin, des indicateurs complémentaires comme le taux d’abandon, la satisfaction ou le nombre de visiteurs permettent d’avoir une vision globale du fonctionnement et de l’attractivité de la plateforme.</p>
        </div>
    </div>
</section>