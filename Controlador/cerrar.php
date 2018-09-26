<?php 
session_start();
unset($_SESSION['usuarioActivo']);
header("location: /phpSISAUTO/view/login.php");
 ?>