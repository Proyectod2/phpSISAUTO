function validarContrasena(obj,e,valor){
  tecla = (document.all) ? e.keyCode : e.which;
  val = tecla;//valor en ascii
  tecla = String.fromCharCode(tecla);
  aux = false;//bandera

    if(valor==''){
    if((val > 47 && val < 58) || (val > 64 && val < 91) || (val > 96 && val < 123)){
      aux=true;
    }
  }else if(valor[0]>=0 || valor[0]>='0'){
    if((val > 47 && val < 58) || (val > 64 && val < 91) || (val > 96 && val < 123)){//poner rangos de letras 
      if(valor.length<8){
        aux=true;
      }   
    }
  }
  
  var tamanio = $('#contrasenaUsu').val().length+1;
  if( tamanio < 6){
    $('#mensajito1').text("Debe contener al menos 6 caracteres");
  }else{
    $('#mensajito1').text("");
  }
  return aux;
}

function validarContrasena2(){
  var confirmar = $('#contrasenaUsu').val();
  var contrasena = $('#contrasenaUsu2').val();
  if( confirmar == contrasena){
    $('#mensajito').text("La contraseña coinciden");
  }else{
    $('#mensajito').text("La contraseña no coinciden");
  }
}
