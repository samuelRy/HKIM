/**
 * script.js — Animations d'entrée de la page d'accueil
 *
 * Ce script gère deux comportements :
 *   1. Animations d'apparition au chargement de la page (home.php) :
 *      - #infos-hero glisse depuis la gauche après 2,5 s
 *      - #card-hero  glisse depuis la droite après 4 s
 *
 *   2. Fonction utilitaire redirect(text) :
 *      Utilisée par les boutons de home.php pour naviguer
 *      vers une autre page sans recharger toute l'application.
 */

// Sélection des deux blocs animés de la section hero
let infos_hero = document.querySelector("#infos-hero");
let card_hero  = document.querySelector("#card-hero");

/**
 * Au chargement complet du DOM :
 *   - Les deux blocs sont d'abord rendus invisibles (opacity: 0)
 *   - Puis animés en séquence via les classes CSS slideRight / slideLeft
 *     définies dans style.css (@keyframes slideRight / slideLeft)
 */
document.body.onload = function () {
    // Masquage initial pour éviter un flash de contenu non animé
    card_hero.style.opacity  = 0;
    infos_hero.style.opacity = 0;

    // Animation du bloc texte (glisse depuis la gauche) — délai : 2,5 s
    setTimeout(function () {
        infos_hero.className += " slideRight";
        infos_hero.style.opacity = 1;
    }, 2500);

    // Animation de la carte hero (glisse depuis la droite) — délai : 4 s
    setTimeout(function () {
        card_hero.className += " slideLeft";
        card_hero.style.opacity = 1;
    }, 4000);
};

/**
 * redirect(text)
 *
 * Redirige l'utilisateur vers la page indiquée.
 * Utilise location.replace() pour ne pas créer d'entrée dans l'historique
 * (l'utilisateur ne peut pas revenir en arrière avec le bouton "Précédent").
 *
 * @param {string} text - Chemin relatif de la page cible (ex: 'services', 'portfolio')
 */
function redirect(text) {
    location.replace(text);
}
