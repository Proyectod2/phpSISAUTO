<?php
include("Conexion.php");

$nombre = $_POST['nombre'];
        
$sql = "INSERT INTO producto (nombre_Prod) VALUES ('$nombre')";

$conexion = conectarMysql();

mysqli_query($conexion,$sql);


?>

