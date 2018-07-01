//validación de que las contraseñas conciden
var password = document.getElementById("password");
var confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Las contraseñas no conciden");
  } else {
    confirm_password.setCustomValidity('');
  }
}

//correr la función cada que haya un cambio en password y en confirm_password
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
