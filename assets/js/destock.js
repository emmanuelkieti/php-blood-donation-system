let destockButtons = body.querySelectorAll(".destock");
destockButtons.forEach((elem)=>{
    elem.addEventListener("click", ()=>{
        let urlParams = new URLSearchParams(window.location.search);
        let bloodgroup = urlParams.get('bloodgroup');
        let queryTable = "";
        switch(bloodgroup){
            case "A-positive":
                queryTable = "apositive";
            break;
            case "A-negative":
                queryTable = "anegative";
            break;
            case "B-positive":
                queryTable = "bpositive";
            break;
            case "B-negative":
                queryTable = "bnegative";
            break;
            case "O-positive":
                queryTable = "opositive";
            break;
            case "O-negative":
                queryTable = "onegative";
            break;
        }
        let paintNumber = elem.parentElement.parentElement.children[0].innerText;
        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", "/bloodbank/includes/destock.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(`pnumber=${paintNumber}&table=${queryTable}`);
        xhttp.onload = function() {
            elem.parentElement.parentElement.style.display = "none";
        }
    });
});