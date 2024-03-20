export const footer = document.getElementById("site-footer");
let year = new Date().getFullYear();
footer.getElementsByTagName("p")[0].innerHTML = `&copy; ${year}, Bloodbank, donate blood - save a life`;