const facilityRegistration = registrationForms[1];
facilityRegistration.addEventListener("submit", (event)=>{
    event.preventDefault();
    let facilityresponseDiv = facilityRegistration.getElementsByClassName("register-success")[0];

    let facilityName,facilityCounty,facilitySubcounty,facilityNumber,facilityEmail;
    facilityName = facilityRegistration.facilityName.value;
    facilityCounty = facilityRegistration.facilityCounty.value;
    facilitySubcounty = facilityRegistration.facilitySubcounty.value;
    facilityNumber = facilityRegistration.facilityNumber.value;
    facilityEmail = facilityRegistration.facilityEmail.value;

    if(facilityName == "" || facilityCounty == "" || facilitySubcounty == "" || facilityNumber == "" || facilityEmail == "") {
        facilityresponseDiv.innerHTML = `<p>All fields must be filled!!</p>`;
    } else {
        if(!validateTextInput(facilityName) || !validateTextInput(facilityCounty) || !validateTextInput(facilitySubcounty)) {
            facilityresponseDiv.innerHTML = `<p>Text input can only have letters or numbers!!</p>`;
        } else {
            if(!validatePhone(facilityNumber)){
                facilityresponseDiv.innerHTML = `<p>Check Phone Number!!</p>`;
            } else {
                if(!validateEmail(facilityEmail)){
                    facilityresponseDiv.innerHTML = `<p>Check Email!!</p>`;
                } else {
                    //submit the form
                    facilityRegistration.submit();
                }
            }
        }
    }
});