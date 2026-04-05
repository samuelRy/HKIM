<?php
/**
 * header.php — En-tête de navigation partagée
 *
 * Inclus dans toutes les pages via include "header.php".
 * Détecte la page courante avec basename($_SERVER['PHP_SELF']) afin
 * de mettre en surbrillance le lien actif dans la navigation.
 */

// Récupération du nom du fichier PHP courant pour marquer le lien actif
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<header>
    <!-- Logo du site -->
    <div class="logo">
        <img src="assets/logo.png" alt="logo-hkim">
    </div>

    <!-- Navigation principale -->
    <nav id="page_links">

        <!-- Lien Accueil — actif si on est sur home.php -->
        <a href="home" class=<?= $currentPage == "home.php" ? 'actual' : '' ?>>
            <img src="assets/home.svg" alt="home-icon">
            <span>Acceuil</span>
        </a>

        <!-- Lien Services — actif si on est sur services.php -->
        <a href="services" class=<?= $currentPage == "services.php" ? 'actual' : '' ?>>
            <img src="assets/miscellaneous-services.svg" alt="services-icon">
            <span>Services</span>
        </a>

        <!-- Lien Portfolio — actif si on est sur portfolio.php -->
        <a href="portfolio" class=<?= $currentPage == "portfolio.php" ? 'actual' : '' ?>>
            <img src="assets/portfolio.svg" alt="files-icon">
            <span>Portfolio</span>
        </a>

        <!-- Lien Contact — destination à définir ultérieurement -->
        <a href="#">
            <img src="assets/letter.svg" alt="letter-icon">
            <span>Contact</span>
        </a>
    </nav>
</header>
