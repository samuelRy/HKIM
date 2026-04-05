<?php
/**
 * services.php — Page des services
 *
 * Structure de la page :
 *   1. En-tête de section — titre + description + barre de filtres par catégorie
 *   2. Grille de cartes   — une carte par service (dupliquée via script_cards.js)
 *   3. Footer             — pied de page partagé (footer.php)
 *
 * Partials inclus : head.php, header.php, footer.php
 * Scripts chargés : script_cards.js (clonage automatique des cartes)
 */
?>
<!DOCTYPE html>
<html lang="fr">
<?php include "head.php"; ?>

<body>
    <?php include "header.php"; ?>

    <!-- =========================================================
         EN-TÊTE DE SECTION
         Titre de la page, description et barre de filtres
         permettant de filtrer les services par catégorie.
    ========================================================== -->
    <div class="main">
        <h1>
            Nos services
        </h1>
        Des solutions complètes et professionnelles pour tous vos projets créatifs et
        techniques

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
         GRILLE DE CARTES SERVICE
         Une seule carte est écrite en HTML ; script_cards.js
         la clone 8 fois pour remplir la grille à l'affichage.
    ========================================================== -->
    <div class="main">
        <div class="cards">

            <!-- Carte modèle — sera clonée par script_cards.js -->
            <div class="card">
                <img src="assets/camera.png" alt="camera-icon" width="70em" />

                <!-- Titre du service -->
                <div class="category">
                    Montage Vidéo Professionnel
                </div>

                <!-- Description courte du service -->
                <div class="description">
                    Création et post-production vidéo de qualité cinématographique pour vos projets marketing,
                    événementiels ou corporate.
                </div>

                <span class="include">Inclus</span>

                <!-- Liste des prestations incluses dans ce service -->
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

                <!-- Délai estimé et fourchette de prix -->
                <div class="date">
                    <div>
                        <img src="assets/clock-line.svg" alt="clock-icon" class="clock-icon">
                        5-15 jours
                    </div>
                    <div>
                        50-150mille
                    </div>
                </div>

                <!-- Bouton de demande de devis -->
                <div class="btnSvc">
                    <button type="button">Demander un devis <span>&#8594;</span></button>
                </div>
            </div>

        </div>
    </div>

    <?php include "footer.php"; ?>

    <!-- Script de clonage automatique des cartes (x8) -->
    <script src="script_cards.js"></script>

</body>

</html>
