const registrationForms = document.forms;
const donorRegistration = registrationForms[0];
donorRegistration.addEventListener("submit", (event)=>{
    event.preventDefault();
    let responseDiv = donorRegistration.getElementsByClassName("register-success")[0];
    let fname,lname,uname,password,passwordConfirm,unumber,uemail,county;
    fname = donorRegistration.fname.value;
    lname = donorRegistration.lname.value;
    uname = donorRegistration.uname.value;
    password = donorRegistration.password.value;
    passwordConfirm = donorRegistration.passwordConfirm.value;
    unumber = donorRegistration.unumber.value;
    uemail = donorRegistration.uemail.value;
    county  = donorRegistration.countyResidence.value;

    if(fname == "" || lname == "" || uname == "" || password == "" || passwordConfirm == "" 
    || unumber == "" || uemail == "" || county == "") {
        responseDiv.innerHTML = `<p>All fields must be filled!!</p>`;
    } else {
        if(!validateTextInput(fname) || !validateTextInput(lname) || !validateTextInput(uname) || !validateTextInput(county)) {
            responseDiv.innerHTML = `<p>Text input can only have letters or numbers!!</p>`;
        } else {
            if(!validatePhone(unumber)){
                responseDiv.innerHTML = `<p>Check Phone Number!!</p>`;
            } else {
                if(password !== passwordConfirm){
                    responseDiv.innerHTML = `<p>Password Mismatch!!</p>`;
                } else {
                    if(!validateEmail(uemail)){
                        responseDiv.innerHTML = `<p>Check Email!!</p>`;
                    } else {
                        //submit the form
                        donorRegistration.submit();
                    }
                }
            }
        }
    }
});

//fuctions
function validateTextInput(text){
    if(/[^a-zA-Z0-9 ]/g.test(text)) return false;
    return true;
}
function validatePhone(number){
    if(/[^0-9]/g.test(number) || number.length != 10) return false;
    return true;
}
function validateEmail(email){
    let mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email.match(mailFormat)) return true;
    return false;
}