function validatePassword(event) {
    // Obtener dato contraseña
    var password = document.getElementById('password').value;

    // Condiciones validación
    var hasUpperCase = /[A-Z]/.test(password);
    var hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/.test(password);

    // Mostrar mensaje de validación
    var validationMessage = document.querySelector('.password_validation-message');

    if (!hasSpecialChar || !hasUpperCase) {
        validationMessage.innerHTML = "La contraseña debe tener al menos una mayúscula o un carácter especial.";
        event.preventDefault(); // Evitar el envío del formulario si la validación falla
        return false;
    } else {
        validationMessage.innerHTML = ""; // Limpiar mensaje si la contraseña es válida
        return true;
    }
}

// Asigna la función de validación al evento submit del formulario
document.querySelector('.formulario__register').addEventListener('submit', function(event) {
    return validatePassword(event);
});
