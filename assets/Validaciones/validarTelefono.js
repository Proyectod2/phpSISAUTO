
              function validarTel(obj, e,valor){
                tecla = (document.all) ? e.keyCode : e.which;
                val= tecla;
                tecla = String.fromCharCode(tecla);
                aux=false;
                if(valor==''){
                  if(tecla=='2' || tecla=='7' || tecla=='6'){
                    aux=true;
                  }
                }else if(valor[0]==2 || valor[0]==7 || valor[0]==6){
                  if(val > 47 && val < 58){
                    if(valor.length<4){
                      aux=true;
                    }   
                  }
                }
                if(valor.length==4 && tecla=='-'){
                  aux=true;
                }else{
                  if(val > 47 && val < 58){
                    if(valor.length>4 && valor.length<9){
                      aux=true;
                    }
                  }
                }
                return aux;
              }
