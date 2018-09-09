
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
    return aux;
  }