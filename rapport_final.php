<?php
$page_title = "Rapport Final – MyGreen Campus";
$extra_css = '<link rel="stylesheet" href="css/rapport_final.css">';
include 'head.php';
?>

<?php include 'partials/_navigation.php'; ?>

<!-- HERO -->
<header class="rf-hero">
    <div class="rf-hero-inner container">
        <div class="rf-hero-tag">Projet tutoré · L3 PRO Métiers de l'Informatique Application Web</div>
        <h1>Rapport Final</h1>
        <p class="rf-hero-subtitle">MyGreen Campus — Sensibiliser les étudiants à leur empreinte carbone</p>
        <div class="rf-hero-meta">
            <span>🗓️ Mars 2026</span>
            <span>👥 Groupe AW3</span>
            <span>🌱 UE L304</span>
        </div>
    </div>
</header>

<!-- SOMMAIRE STICKY -->
<nav class="rf-sommaire">
    <div class="container rf-sommaire-inner">
        <span class="rf-sommaire-label">Sommaire</span>
        <a href="#problematique">Problématique</a>
        <a href="#competences">Compétences</a>
        <a href="#veilles">Veilles</a>
        <a href="#solutions">Solutions V1/V2</a>
        <a href="#risques">Risques</a>
        <a href="#indicateurs">KPI</a>
        <a href="#lecons">Leçons</a>
        <a href="#offre-technique">Offre technique</a>
    </div>
</nav>

<!-- SECTIONS -->
<?php include 'partials/_rf_problematique.php'; ?>
<?php include 'partials/_rf_competences.php'; ?>
<?php include 'partials/_rf_veilles.php'; ?>
<?php include 'partials/_rf_solutions.php'; ?>
<?php include 'partials/_rf_risques_kpi.php'; ?>
<?php include 'partials/_rf_lecons.php'; ?>
<?php include 'partials/_rf_offre_technique.php'; ?>

<?php include "partials/_footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Smooth scroll pour le sommaire -->
<script>
document.querySelectorAll('.rf-sommaire a').forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        const target = document.querySelector(link.getAttribute('href'));
        if (target) {
            const offset = document.querySelector('.rf-sommaire').offsetHeight + 20;
            window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - offset, behavior: 'smooth' });
        }
    });
});
</script>

</body>
</html>

