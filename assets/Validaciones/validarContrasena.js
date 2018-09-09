
  function validarContrasena(obj,e,valor){
    tecla = (document.all) ? e.keyCode : e.which;
    val = tecla;//valor en ascii
    tecla = String.fromCharCode(tecla);
    aux = false;//bandera

      if(valor==''){
      if(tecla>='0'){
        aux=true;
      }
    }else if(valor[0]>=0 || valor[0]>='0'){
      if(val > 47 && val < 58){//poner rangos de letras 
        if(valor.length<8){
          aux=true;
        }   
      }
    }
    
    return aux;
  }