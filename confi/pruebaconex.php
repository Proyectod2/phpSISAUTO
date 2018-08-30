<?php 
include("Conexion.php");

$conexion = conectarMysql();

if($conexion){
    echo "Exito, entro a la bd... wuuwuwuw";
}else{
    echo "Fallo, siga jodiendose la cabeza";
}
?>