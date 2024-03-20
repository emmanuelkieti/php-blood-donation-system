const forms = document.forms;
const addPaintForm = forms[0];
addPaintForm.addEventListener("submit", (event)=>{
    event.preventDefault();
    let responseDiv = addPaintForm.querySelector(".register-success");
    if(addPaintForm.paintNumber.value == "") {
        responseDiv.innerHTML = "<p>Fill all the fields.</p>";
    } else {
        if(!validatePaintNumber(addPaintForm.paintNumber.value)) {
            responseDiv.innerHTML = "<p>Check your input.</p>";
        }
        else addPaintForm.submit();
    }
});

function validatePaintNumber(paintNumber){
    if(/[^A-Za-z0-9 ]/g.test(paintNumber)) return false;
    return true;
}