/**
 * script_cards.js — Clonage automatique des cartes
 *
 * Utilisé sur les pages services.php et portfolio.php.
 *
 * Principe :
 *   Une seule carte (.card) est écrite en dur dans le HTML en guise
 *   de modèle. Ce script la clone 8 fois et insère les copies dans
 *   le conteneur .cards, simulant ainsi une grille de plusieurs éléments
 *   sans avoir à dupliquer le balisage à la main.
 *
 * À terme, ce mécanisme pourrait être remplacé par une boucle PHP
 * alimentée depuis une base de données ou un fichier JSON.
 */

// Sélection de la carte modèle et de son conteneur parent
const card  = document.querySelector(".card");
const cards = document.querySelector(".cards");

// Clonage de la carte 8 fois pour remplir la grille
for (let index = 0; index < 8; index++) {
    let a       = document.createElement("div");
    a.innerHTML = card.innerHTML;  // copie du contenu interne de la carte modèle
    a.className = "card";          // application de la même classe CSS

    cards.appendChild(a);
    // console.log("Child appened" + cards.childElementCount); // décommenter pour déboguer
}
