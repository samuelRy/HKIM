const page_links = document.querySelectorAll("#page_links a");
const path = window.location.pathname;
const filename = path.substring(path.lastIndexOf('/') + 1);

for (i=0; i<page_links.length; i++) {
    const check = page_links[i].href.split('/');
    

    console.log(check + " " + filename + " " );
    if ((check[check.length -1] + "html") === filename || check[check.length -1] === filename) {
        page_links[i].className = "actual";
    }
}