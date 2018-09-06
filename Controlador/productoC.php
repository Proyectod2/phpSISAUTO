<?php

$bandera = $_POST["bandera"];
$nombrePro = $_POST["nombrePro"];
$categoria = $_POST["categorias"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$anio = $_POST["anio"];
$descripcion = $_POST["descripcion"];

include("../confi/Conexion.php");

if ($bandera == "guardar") {
    $sql = "INSERT INTO producto (nombre_Prod,categoria_Prod,marca_Prod,descripcion_Prod,modeloVehiculo_Prod,anioVehiculo_Prod) VALUES ('$nombrePro','$categoria','$marca','$descripcion','$modelo','$anio')";

    $conexion = conectarMysql();

    mysqli_query($conexion,$sql)or die ("Error a Conectar en la BD".mysqli_connect_error());
    $mensajes = "Registro guardado exitosamente";
    header("location: /phpSISAUTO/view/Producto.php?mensaje=".$mensajes);
}

?>

