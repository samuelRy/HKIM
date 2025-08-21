let infos_hero = document.querySelector("#infos-hero");
let card_hero = document.querySelector("#card-hero");

document.body.onload = function () {
    setTimeout(function () {
        infos_hero.className += " slideRight";
        infos_hero.style.opacity = 1;
    }, 2500);
    setTimeout(function () {
        card_hero.className += " slideLeft";
        card_hero.style.opacity = 1;
    }, 4500);
}