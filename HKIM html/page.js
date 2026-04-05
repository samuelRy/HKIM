/**
 * page.js — Détection et marquage du lien de navigation actif (version HTML statique)
 *
 * Ce script est l'équivalent côté JavaScript de la logique PHP présente
 * dans header.php ($currentPage). Il est utilisé uniquement dans le
 * dossier "HKIM html" (version statique sans PHP).
 *
 * Fonctionnement :
 *   1. On récupère tous les liens de navigation (#page_links a).
 *   2. On extrait le nom du fichier courant depuis window.location.pathname.
 *   3. On compare chaque lien au fichier courant et on lui ajoute
 *      la classe "actual" s'il correspond.
 *
 * Exemple : si l'URL est "/HKIM html/services.html",
 *   filename = "services.html"
 *   → le lien href="services.html" reçoit la classe "actual".
 */

// Récupération de tous les liens de la navigation
const page_links = document.querySelectorAll("#page_links a");

// Extraction du nom du fichier courant depuis l'URL
const path     = window.location.pathname;
const filename = path.substring(path.lastIndexOf('/') + 1);

// Parcours des liens pour identifier et marquer le lien actif
for (i = 0; i < page_links.length; i++) {
    // Découpage de l'URL du lien en segments séparés par "/"
    const check = page_links[i].href.split('/');

    console.log(check + " " + filename + " "); // décommenter pour déboguer

    // Le lien correspond si la dernière partie de son href correspond au fichier courant
    // (avec ou sans l'extension "html" concaténée — gestion des deux cas)
    if ((check[check.length - 1] + "html") === filename || check[check.length - 1] === filename) {
        page_links[i].className = "actual";
    }
}
