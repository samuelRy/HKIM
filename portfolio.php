<!DOCTYPE html>
<html lang="en">
<?php
include "head.php";
?>

<body>
    <?php
    include "header.php";
    ?>
    <div class="main">
        <h1>
            Notre Protfolio
        </h1>
        Découvrez nos réalisations et laissez-vous inspirer par nos projets les plus
        remarquables

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
                <img src="assets/New Website Blue Mockup Instagram - Laptop 1.png" alt="pc-interface" class="illustrating">
                <div class="infos-card">
                    <span class="category">Design graphique</span>
                    <span>
                        <img src="assets/Calendar 22.png" alt="calendar">
                        22 fev 2024
                    </span>
                </div>
                <div class="description">
                    <h4>Interface Dashboard Analytics</h4>
                    Design d'une interface de tableau de bord moderne pour l'analyse de données en temps réel.
                </div>
                <div class="client">
                    <img src="assets/User.png" alt="person">
                    Client : Mr Personne
                </div>
                <div class="softwares">
                    <span>Figma</span>
                    <span>Sketch</span>
                    <span>Prototype</span>
                </div>
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