<?php

include("../confi/Conexion.php");

function guardarP() {
    $nombrePro = $_POST['nombrePro'];
    $categoria = $_POST['categoria'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $anio = $_POST['anio'];
    $descripcion = $_POST['descripcion'];


    $sql = "INSERT INTO producto (nombre_Prod,categoria_Prod,marca_Prod,descripcion_Prod,modeloVehiculo_Prod,anioVehiculo_Prod) VALUES ('$nombrePro','$categoria','$marca','$descripcion','$modelo','$anio')";

    $conexion = conectarMysql();

    $ejecutar = mysqli_query($conexion, $sql);

    return $ejecutar;
}
?>

