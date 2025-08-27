
let nav = document.querySelectorAll("nav a");
window.onresize = (e)=>{
    console.log(window.innerWidth);
    if (window.innerWidth.valueOf()<=800) {
        console.log("fds");
        for (let index = 0; index < nav.length; index++) {
    const a = nav[index];
    if (!(a.className === 'actual')) {
            a.lastElementChild.style.display = "none";

    }
    
}
    }
};
