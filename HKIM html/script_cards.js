/**
 * script_cards.js — Clonage automatique des cartes (version HTML statique)
 *
 * Identique à ../script_cards.js mais utilisé dans le dossier "HKIM html".
 *
 * Une seule carte (.card) est écrite en dur dans le HTML en guise de modèle.
 * Ce script la clone 8 fois et insère les copies dans le conteneur .cards,
 * simulant ainsi une grille complète sans dupliquer le balisage manuellement.
 *
 * À terme, ce mécanisme pourrait être remplacé par des données dynamiques
 * chargées depuis une API ou un fichier JSON.
 */

// Sélection de la carte modèle et de son conteneur parent
const card  = document.querySelector(".card");
const cards = document.querySelector(".cards");

// Clonage de la carte 8 fois pour remplir la grille
for (let index = 0; index < 8; index++) {
    let a       = document.createElement("div");
    a.innerHTML = card.innerHTML; // copie du contenu interne de la carte modèle
    a.className = "card";         // application de la même classe CSS

    cards.appendChild(a);
}
