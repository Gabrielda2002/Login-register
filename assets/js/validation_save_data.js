//* funcion para validar envio de datos desde el formulario sin necesidad de que se redirija a otra pagina
function showSuccessMessage() {
  var successMessage = document.createElement("div");
  successMessage.innerHTML = "Se a registrado exitosamente";
  successMessage.classList.add("success-message");
  document.querySelector(".buttom-container").appendChild(successMessage);
}

document
  .querySelector(".formulario__register")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    if (validatePassword(event)) {
        showSuccessMessage();
    }
  });

  