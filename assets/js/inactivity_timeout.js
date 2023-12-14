var timeOut;

function resetInactivityTimeout() {
  clearTimeout(timeOut);
  timeOut = setTimeout(function () {
    // * redirige al usuario a la pagina de inicio
    window.location.replace("../../pages/login-register-administrativos.php");
  }, 60000);
}

document.addEventListener("mousemove", resetInactivityTimeout);
document.addEventListener("keypress", resetInactivityTimeout);
