function validarCorreo(elemento){

  var texto = document.getElementById(elemento.id).value;
  var regex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
  
  if (!regex.test(texto)) {
      document.getElementById("correoUsu").innerHTML = "Correo inválido";
  } else {
    document.getElementById("correoUsu").innerHTML = "";
  }

}

function validarCorreoProv(elemento){

var texto = document.getElementById(elemento.id).value;
  var regex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
  
  if (!regex.test(texto)) {
      document.getElementById("correoPro").innerHTML = "Correo inválido";
  } else {
    document.getElementById("correoPro").innerHTML = "";
  }
}
