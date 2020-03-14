function formValidation() {

    var firtName = document.forms["registerForm"]["firstname"].value;
    var lastName = document.forms["registerForm"]["lastname"].value;
    var email = document.forms["registerForm"]["email"].value;
    var country = document.forms["registerForm"]["country"].value;

    var emailFilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var nameFilter = /^[A-Za-z]+$/ ;

    var errorMessage = document.getElementById("errorMsg");

    if (!firtName) {
        document.getElementById("firstname").className += " is-invalid";
        errorMessage.innerText = "First Name Required";
        return false;
    } 
    else if (!lastName) {
        document.getElementById("lastname").className += " is-invalid";
        errorMessage.innerText = "Last Name Required";
        return false;
    } 

    else if (!nameFilter.test(firtName && lastName)) {
        document.getElementById("firstname").className += " is-invalid";
        document.getElementById("lastname").className += " is-invalid";
        errorMessage.innerText = "Invalid Name: Name should contain only alphabets";
        return false;
    }

    else if (!email){
        document.getElementById("email").className += " is-invalid";
        errorMessage.innerText = "Email Required";
        return false;
    }

    else if (!emailFilter.test(email)) {
        document.getElementById("email").className += " is-invalid";
        errorMessage.innerText = "Invalid email address";
        return false;
    }

    else if (!country) {
        document.getElementById("country").className += " is-invalid";
        errorMessage.innerText = "Select your Country" ;
        return false;
    }

    else {
        alert("New User Added to the database");
    }

}