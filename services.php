<!DOCTYPE html>
<html lang="fr">
<?php
include "head.php";
?>

<body>
    <?php
    include "header.php";
    ?>
    <div class="main">
        <h1>
            Nos services
        </h1>
        Des solutions complètes et professionnelles pour tous vos projets créatifs et
        techniques

        <div id="categories">
            <div class="actual">Tous</div>
            <div>Vidéos</div>
            <div>Design</div>
            <div>Dev</div>
            <div>Méca</div>
        </div>
    </div>

    <div class="main">
        <div class="cards">
            <div class="card">
                <img src="assets/camera.png" alt="camera-icon" width="70em" />
                <div class="category">
                    Montage Vidéo Professionnel
                </div>
                <div class="description">
                    Création et post-production vidéo de qualité cinématographique pour vos projets marketing,
                    événementiels ou corporate.
                </div>
                <span class="include">Inclus</span>
                <div id="details">
                    <div>
                        <img src="assets/check.svg" alt="check-icon" class="check-icon">
                        Prototypage
                    </div>
                    <div>
                        <img src="assets/check.svg" alt="check-icon" class="check-icon">
                        Usinage
                    </div>
                    <div>
                        <img src="assets/check.svg" alt="check-icon" class="check-icon">
                        Assemblage
                    </div>

                </div>
                <div class="date">
                    <div>
                        <img src="assets/clock-line.svg" alt="clock-icon" class="clock-icon">
                        5-15 jours
                    </div>
                    <div>
                        50-150mille
                    </div>
                </div>
                <div class="btnSvc"><button type="button">Demander un devis <span>&#8594;</span></button></div>
            </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
    <script src="script_cards.js"></script>
    <script src="script2.js"></script>
</body>

</html>