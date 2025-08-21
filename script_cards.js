const card = document.querySelector(".card");
const cards = document.querySelector(".cards");

for (let index = 0; index < 8; index++) {
    let a = document.createElement("div");
    a.innerHTML = card.innerHTML;
    a.className = "card";
    cards.appendChild(a);
    console.log("Child appened" + cards.childElementCount);

}