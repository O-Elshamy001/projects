var emailfield = document.getElementById("email-field");
var emailError = document.getElementById("email-error");
function validateEmail() {
    if (emailfield.Value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
        emailError.innerHTML = "please enter a valid email";

        return false;
    }
    emailError.innerHTML = "";
    return true;

}
