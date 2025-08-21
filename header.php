<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<header>
    <div id="logo">
        <img src="assets/logo.png" alt="logo-hkim">
    </div>
    <div id="page_links">
        <a href="home" class=<?= $currentPage == "home.php" ? 'actual' : '' ?>>
            <img src="assets/home.svg" alt="home-icon">
            Acceuil
        </a>
        <a href="services" class=<?= $currentPage == "services.php" ? 'actual' : '' ?>>
            <img src="assets/miscellaneous-services.svg" alt="services-icon">
            Services
        </a>
        <a href="portfolio" class=<?= $currentPage == "portfolio.php" ? 'actual' : '' ?>>
            <img src="assets/portfolio.svg" alt="files-icon">
            Portfolio
        </a>
        <a href="#">
            <img src="assets/letter.svg" alt="letter-icon">
            Contact
        </a>
    </div>
</header>