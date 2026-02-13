<?php
$page_title = "MyGreen Campus - Groupe 03";
include 'head.php';
?>

<body class="d-flex flex-column min-vh-100">

<div class="background-fixe"></div>

<?php
include 'partials/_navigation.php';
?>

<section class="hero-section flex-grow-1 d-flex flex-column justify-content-center">
    <div class="container text-center text-white py-5">
        <h1 class="mb-4 fw-bold">Pourquoi MyGreen Campus ?</h1>
        <p class="intro text-white mb-5">
            Aujourd’hui, en 2026, on parle beaucoup d’écologie. C’est un sujet crucial qui prend de l'ampleur, mais soyons honnêtes : 
            <strong>combien d’entre nous connaissent vraiment leur impact carbone au quotidien ?</strong>
            <br><br>
            MyGreen Campus part de ce constat simple. Nous avons conçu une plateforme web SaaS pensée par et pour les étudiant·e·s. 
            Elle permet de calculer facilement son empreinte carbone en fonction de son mode de vie réel.
            <br><br>
            L’idée est de rendre l’impact visible et concret. Fini le discours abstrait ! 
            Nous transformons des données complexes en une source de motivation accessible.
        </p>
        <div class="boutons-container">
            <a href="../rapport_lancement.php" class="mon-btn btn-vert">Rapport de lancement</a>
            <a href="../rapport_final.php" class="mon-btn btn-blanc">Rapport final</a>
            <a href="../annexes.php" class="mon-btn btn-blanc">Annexes</a>
        </div>
    </div>
</section>

<?php
include 'partials/_footer.php';
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>