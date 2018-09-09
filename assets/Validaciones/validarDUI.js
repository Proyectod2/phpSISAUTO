function validarDUI(obj,e,valor){
  tecla = (document.all) ? e.keyCode : e.which;
  val = tecla;
  tecla = String.fromCharCode(tecla);
  aux = false;
  if(valor == ''){
    if((val > 47 && val < 58)){
      aux = true;
    }
  }else if(valor[0]>=0){
    if(val > 47 && val < 58){
      if(valor.length<8){
        aux = true;
      }   
    }
  }
  if(valor.length == 8 && tecla == '-'){
    aux = true;
  }else{
    if(val > 47 && val < 58){
      if(valor.length > 8 && valor.length <= 9){
        aux = true;
      }
    }
  }
  return aux;
}
