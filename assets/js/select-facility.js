const bookDonationForm = document.forms[0];
bookDonationForm.facilities.addEventListener("change", ()=>{
    let facilityName = facilities.value;
    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", `/bloodbank/includes/select-facility.php?facilityName=${facilityName}`);
    xhttp.send();
    xhttp.onload = function() {
        bookDonationForm.county.innerHTML = xhttp.responseText;
    }
});

bookDonationForm.addEventListener("submit", (event)=>{
    event.preventDefault();
    if(bookDonationForm.facilities.value == "" || bookDonationForm.county.value == ""){
        body.querySelector(".register-success").innerHTML = "<p>Fill both fields.</p>";
    } else bookDonationForm.submit();
});