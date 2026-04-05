<?php
/**
 * portfolio.php — Page portfolio
 *
 * Structure de la page :
 *   1. En-tête de section — titre + description + barre de filtres par catégorie
 *   2. Grille de cartes   — une carte par réalisation (dupliquée via script_cards.js)
 *   3. Footer             — pied de page partagé (footer.php)
 *
 * Partials inclus : head.php, header.php, footer.php
 * Scripts chargés : script_cards.js (clonage automatique des cartes)
 *
 * Note : le lang est "en" dans l'original — conservé tel quel.
 */
?>
<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>

<body>
    <?php include "header.php"; ?>

    <!-- =========================================================
         EN-TÊTE DE SECTION
         Titre de la page, description et barre de filtres
         permettant de filtrer les réalisations par catégorie.
    ========================================================== -->
    <div class="main">
        <h1>
            Notre Protfolio
        </h1>
        Découvrez nos réalisations et laissez-vous inspirer par nos projets les plus
        remarquables

        <!-- Filtres de catégorie — la classe "actual" indique la sélection active -->
        <div id="categories">
            <div class="actual">Tous</div>
            <div>Vidéos</div>
            <div>Design</div>
            <div>Dev</div>
            <div>Méca</div>
        </div>
    </div>

    <!-- =========================================================
         GRILLE DE CARTES PORTFOLIO
         Une seule carte est écrite en HTML ; script_cards.js
         la clone 8 fois pour remplir la grille à l'affichage.
    ========================================================== -->
    <div class="main">
        <div class="cards">

            <!-- Carte modèle — sera clonée par script_cards.js -->
            <div class="card">

                <!-- Image illustrant le projet -->
                <img src="assets/New Website Blue Mockup Instagram - Laptop 1.png" alt="pc-interface" class="illustrating">

                <!-- Méta-infos : catégorie et date de réalisation -->
                <div class="infos-card">
                    <span class="category">Design graphique</span>
                    <span>
                        <img src="assets/Calendar 22.png" alt="calendar">
                        22 fev 2024
                    </span>
                </div>

                <!-- Description du projet -->
                <div class="description">
                    <h4>Interface Dashboard Analytics</h4>
                    Design d'une interface de tableau de bord moderne pour l'analyse de données en temps réel.
                </div>

                <!-- Nom du client -->
                <div class="client">
                    <img src="assets/User.png" alt="person">
                    Client : Mr Personne
                </div>

                <!-- Outils / logiciels utilisés -->
                <div class="softwares">
                    <span>Figma</span>
                    <span>Sketch</span>
                    <span>Prototype</span>
                </div>
            </div>

        </div>
    </div>

    <?php include "footer.php"; ?>

    <!-- Script de clonage automatique des cartes (x8) -->
    <script src="script_cards.js"></script>

</body>

</html>
