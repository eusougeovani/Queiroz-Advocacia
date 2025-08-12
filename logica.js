function mostrarSenhaFunc() {
  var senhaInput = document.getElementById("senha");
  if (senhaInput.type === "password") {
    senhaInput.type = "text";
  } else {
    senhaInput.type = "password";
  }
}