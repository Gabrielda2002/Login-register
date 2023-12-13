function validatePhone(event) {
  // Obtener dato contraseña
  var phone = document.getElementById("phone").value;

  // Condiciones validación
  var regex = /^\+\d{11,}$/;
  if (!regex.test(phone)) {
    alert(
      'Formato de número de teléfono no válido. Debe comenzar con "+" y contener al menos 11 dígitos.'
    );
    return false;
  } else {
    return true;
  }
}
