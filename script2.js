/**
 * script2.js — Gestion responsive de la navigation
 *
 * Sur les écrans de largeur ≤ 800 px, les libellés texte des liens
 * de navigation sont masqués pour économiser de l'espace, sauf pour
 * le lien actif (classe "actual") qui conserve son label visible.
 *
 * Ce comportement est déclenché à chaque redimensionnement de la fenêtre
 * via l'événement window.onresize.
 */

// Sélection de tous les liens de la navigation principale
let nav = document.querySelectorAll("nav a");

/**
 * Listener de redimensionnement de la fenêtre.
 * Quand la largeur passe sous 800 px, on masque le <span> (libellé)
 * de chaque lien non actif.
 *
 * Note : un lien est considéré "actif" s'il possède la classe "actual"
 * (attribuée côté PHP dans header.php selon la page courante).
 */
window.onresize = (e) => {
    // console.log(window.innerWidth); // décommenter pour déboguer la largeur courante

    if (window.innerWidth.valueOf() <= 800) {
        for (let index = 0; index < nav.length; index++) {
            const a = nav[index];

            // On ne touche pas au lien actif : il garde son libellé visible
            if (!(a.className === 'actual')) {
                a.lastElementChild.style.display = "none";
            }
        }
    }
};
