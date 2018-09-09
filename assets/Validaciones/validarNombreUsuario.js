
  function validarNombreUsuario(obj,e,valor){
    tecla = (document.all) ? e.keyCode : e.which;
    val= tecla;
    tecla = String.fromCharCode(tecla);
    aux=false;
    if(valor==''){
      if(!(tecla>='0' && tecla<='9')){
        aux=true;
      }
    }else if(valor[0] != !(tecla>='0' && tecla<='9')){
      if((val > 47 && val < 58) || (val > 64 && val < 91) || (val > 96 && val < 123)){//poner rangos de letras 
        if(valor.length<8){
          aux=true;
        }   
      }
    }

    return aux;
  }
