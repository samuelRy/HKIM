<?php
/**
 * home.php — Page d'accueil
 *
 * Structure de la page :
 *   1. Section Hero       — accroche principale + carte des domaines
 *   2. Section Expertise  — quatre cartes de compétences détaillées
 *   3. Section CTA Footer — appel à l'action avant le pied de page
 *   4. Footer             — pied de page partagé (footer.php)
 *
 * Partials inclus : head.php, header.php, footer.php
 * Scripts chargés : script.js (animations d'entrée + helper redirect)
 */
?>
<html lang="fr">

<?php include "head.php"; ?>

<body>
    <?php include "header.php"; ?>

    <!-- =========================================================
         SECTION HERO
         Accroche principale avec titre, sous-titre, boutons CTA,
         statistiques clés et une carte visuelle des domaines.
    ========================================================== -->
    <div id="hero-section">

        <!-- Bloc gauche : texte + boutons + statistiques -->
        <div id="infos-hero">
            <h1 id="main-text-hero">
                Transformez vos <span>idées</span> en réalité
            </h1>

            <div id="sub-text-hero">
                Excellence en montage vidéo, design graphique, développement
                digital et mécanique de précision. Votre vision, notre expertise.
            </div>

            <!-- Boutons d'appel à l'action -->
            <div id="buttons">
                <button type="button" class="button btn-1" onclick="redirect('services')">
                    Découvrir nos services <span>&#8594;</span>
                </button>
                <button type="button" class="button btn-2">
                    Demander un devis
                </button>
            </div>

            <!-- Statistiques rapides : clients, projets, années d'expérience -->
            <div id="mentions">
                <div>
                    <img src="assets/Users.png" alt="people">
                    <span>75+</span>
                    Clients satisfaits
                </div>
                <div>
                    <img src="assets/Certificate.png" alt="people">
                    <span>100+</span>
                    Projets réaliser
                </div>
                <div>
                    <img src="assets/Star.png" alt="people">
                    <span>8+</span>
                    Année d'expérience
                </div>
            </div>
        </div>

        <!-- Bloc droit : carte visuelle des quatre domaines -->
        <div id="card-hero">
            <div id="card-hero-main">
                <div>
                    <img src="assets/camera.png" alt="camera-icon" width="50rem" />
                    Montage
                </div>
                <div>
                    <img src="assets/stack.png" alt="stack-icon" width="50rem" />
                    Design
                </div>
                <div>
                    <img src="assets/developer.png" alt="dev-icon" width="50rem" />
                    Développement
                </div>
                <div>
                    <img src="assets/wrench-tool.png" alt="engine-repair-icon" width="50rem" />
                    Mécanique
                </div>
            </div>
        </div>
    </div>

    <!-- =========================================================
         SECTION EXPERTISE
         Grille de quatre cartes présentant chaque domaine de
         compétence avec ses points forts (checklist).
    ========================================================== -->
    <div id="expertise-section">
        <h1 id="main-text-expertise">
            Nos expertises
        </h1>
        <div id="sub-text-expertise">
            Quatre domaines d'excellence pour répondre à tous
            vos besoins créatifs et techniques
        </div>

        <div id="cards-expertise">

            <!-- Carte 1 : Montage Vidéo -->
            <div class="card-expertise">
                <!--<include video.icon-->
                <div class="text-1">
                    <img src="assets/camera.png" alt="camera-icon" width="70em" />
                    Montage Vidéo
                </div>
                <div class="text-2">
                    Création et post-production
                    vidéo professionnelle
                </div>
                <div class="pros">
                    <div>
                        <img src="assets/check.svg" alt="check-icon" class="check-icon">
                        Motion Design
                    </div>
                    <div>
                        <img src="assets/check.svg" alt="check-icon" class="check-icon">
                        Color Gradind
                    </div>
                    <div>
                        <img src="assets/check.svg" alt="check-icon" class="check-icon">
                        Effets Visuels
                    </div>
                </div>
            </div>

            <!-- Carte 2 : Design Graphique -->
            <div class="card-expertise">
                <div class="text-1">
                    <img src="assets/stack.png" alt="stack-icon" width="50em" />
                    Design graphique
                </div>
                <div class="text-2">
                    Identité visuelle et interface
                    utilisateur
                </div>
                <div class="pros">
                    <div>
                        <img src="assets/check.svg" alt="check-icon" class="check-icon">
                        Logo & Branding
                    </div>
                    <div>
                        <img src="assets/check.svg" alt="check-icon" class="check-icon">
                        UI/UX Design
                    </div>
                    <div>
                        <img src="assets/check.svg" alt="check-icon" class="check-icon">
                        Interface Design
                    </div>
                </div>
            </div>

            <!-- Carte 3 : Développement -->
            <div class="card-expertise">
                <div class="text-1">
                    <img src="assets/developer.png" alt="dev-icon" width="50em" /> Développement
                </div>
                <div class="text-2">
                    Applications web et mobile sur
                    mesure
                </div>
                <div class="pros">
                    <div>
                        <img src="assets/check.svg" alt="check-icon" class="check-icon">
                        Site Web
                    </div>
                    <div>
                        <img src="assets/check.svg" alt="check-icon" class="check-icon">
                        Appli Mobile
                    </div>
                    <div>
                        <img src="assets/check.svg" alt="check-icon" class="check-icon">
                        E-commerce
                    </div>
                </div>
            </div>

            <!-- Carte 4 : Mécanique -->
            <div class="card-expertise">
                <div class="text-1">
                    <img src="assets/wrench-tool.png" alt="engine-repair-icon" width="50em" />
                    Mécanique
                </div>
                <div class="text-2">
                    Solutions techniques et
                    mécanique de précision
                </div>
                <div class="pros">
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
            </div>

        </div>

        <!-- Bouton vers la page Services complète -->
        <button type="button" id="all-services" onclick="redirect('services')">
            Voir tout nos services
        </button>
    </div>

    <!-- =========================================================
         SECTION CTA FOOTER
         Bandeau sombre d'appel à l'action avant le footer.
         Invite l'utilisateur à demander un devis ou voir le portfolio.
    ========================================================== -->
    <div id="footer-section">
        <h1>Prêt à démarrer votre projet?</h1>
        Contactez-nous dès aujourd'hui pour discuter de vos besoins et obtenir un devis personnalisé.
        <div>
            <button type="button">
                Demander un devis gratuit</button>
            <button type="button" onclick="redirect('portfolio')">Voir notre portfolio</button>
        </div>
    </div>

    <?php include "footer.php"; ?>

    <!-- Script d'animations d'entrée (slideRight / slideLeft) et helper redirect() -->
    <script src="script.js"></script>

</body>

</html>
