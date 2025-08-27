<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<header>
    <div id="logo">
        <img src="assets/logo.png" alt="logo-hkim">
    </div>
    <nav id="page_links">
        <a href="home" class=<?= $currentPage == "home.php" ? 'actual' : '' ?>>
            <img src="assets/home.svg" alt="home-icon">
            <span>Acceuil</span>
        </a>
        <a href="services" class=<?= $currentPage == "services.php" ? 'actual' : '' ?>>
            <img src="assets/miscellaneous-services.svg" alt="services-icon">
            <span>Services</span>
        </a>
        <a href="portfolio" class=<?= $currentPage == "portfolio.php" ? 'actual' : '' ?>>
            <img src="assets/portfolio.svg" alt="files-icon">
            <span>Portfolio</span>
        </a>
        <a href="#">
            <img src="assets/letter.svg" alt="letter-icon">
            <span>Contact</span>
        </a>
    </nav>
</header>