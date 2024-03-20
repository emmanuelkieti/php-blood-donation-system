const body = document.body;
const nav = body.getElementsByTagName("nav")[0];

//current page link color
(function currentPage () {
    let links = nav.querySelectorAll(`ul li a`);
    let current = location.pathname;
    for (let i of links) {
        let href = i.getAttribute("href");
        if (href == current) {
            i.classList.add('current');
            i.parentElement.style.borderLeft = `1px solid black`;
        }
    }
})();