function validatePassword() {
    var password = document.getElementById("password").value;
    var passwordHelp = document.getElementById("passwordHelp");

    // Expresiones regulares para los requisitos de la contraseña
    var hasUpperCase = /[A-Z]/.test(password);
    var hasNumber = /\d/.test(password);
    var hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/.test(password);
    var isLongEnough = password.length >= 6;

    var message = "";

    if (!isLongEnough) {
        message += "La contraseña debe tener al menos 6 caracteres. ";
    }
    if (!hasUpperCase) {
        message += "Debe contener al menos una letra mayúscula. ";
    }
    if (!hasNumber) {
        message += "Debe contener al menos un número. ";
    }
    if (!hasSpecialChar) {
        message += "Debe contener al menos un carácter especial. ";
    }

    if (message === "") {
        passwordHelp.textContent = "Contraseña válida.";
        passwordHelp.style.color = "green";
    } else {
        passwordHelp.textContent = message;
        passwordHelp.style.color = "red";
    }
}
