<html lang="fr">

<?php
include "head.php";
?>

<body>
    <?php
    include "header.php";
    ?>

    <div id="hero-section">
        <div id="infos-hero">
            <h1 id="main-text-hero">
                Transformez vos <span>idées</span> en réalité
            </h1>
            <div id="sub-text-hero">
                Excellence en montage vidéo, design graphique, développement
                digital et mécanique de précision. Votre vision, notre expertise.
            </div>
            <div id="buttons">
                <button type="button" class="button btn-1" onclick="redirect('services')">
                    Découvrir nos services <span>&#8594;</span>
                </button>
                <button type="button" class="button btn-2">
                    Demander un devis
                </button>
            </div>
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
                    Année d’expérience
                </div>
            </div>
        </div>
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

    <div id="expertise-section">
        <h1 id="main-text-expertise">
            Nos expertises
        </h1>
        <div id="sub-text-expertise">
            Quatre domaines d'excellence pour répondre à tous
            vos besoins créatifs et techniques
        </div>
        <div id="cards-expertise">
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
        <button type="button" id="all-services" onclick="redirect('services')">
            Voir tout nos services
        </button>
    </div>
    <div id="footer-section">
        <h1>Prêt à démarrer votre projet?</h1>
        Contactez-nous dès aujourd'hui pour discuter de vos besoins et obtenir un devis personnalisé.
        <div>
            <button type="button">
                Demander un devis gratuit</button>
            <button type="button" onclick="redirect('portfolio')">Voir notre portfolio</button>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
    <script src="script.js"></script>
    <script src="script2.js"></script>
</body>

</html>