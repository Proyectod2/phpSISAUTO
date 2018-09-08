<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<?php include("Generalidadespantalla/apertura.php"); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

<?php include("Generalidadespantalla/Menu.php"); ?>

    <div class="content-wrapper" style="background-color:#eff3f4;">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Inicio</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="http://localhost/phpSISAUTO/view/Usuarios.php">Usuarios</a>
                </li>
                <li class="breadcrumb-item">
                    <a>Registrar Usuario</a>
                </li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class=""></i> Registrar Usuario</div>
                <div class="card-body">
                    <form action="../Controlador/usuarioC.php" method="POST" id="guardarUsu" align="center" autocomplete="off">
                        <h5 align="center">Datos Generales</h5><br>
                        <input type="hidden" value="GuardarUsu" name="bandera"></input>
                        <div class="form-group row">
                            <label for="nombre" class="col-sm-12 col-md-2 col-form-label">Nombre:</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" placeholder="Nombre Completo" type="text" id="nombreUsu"  name="Nombre_Usu" style="width:600px;height:40px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  for="telefono" class="col-sm-12 col-md-2 col-form-label">Teléfono:</label>
                            <div  class="col-sm-12 col-md-10">
                                <input class="form-control" type="tel" id="telefonoUsu" placeholder="XXXX-XXXX"  name="Telefono_Usu" style="width:150px;height:40px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nombre" class="col-sm-12 col-md-2 col-form-label">Correo:</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" placeholder="Correo" type="email" id="correoUsu"  name="Correo_Usu" style="width:600px;height:40px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="direccion" class="col-sm-12 col-md-2 col-form-label">Dirección:</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Dirección" name="Direccion_Usu" style="width:600px;height:40px" id="direccionUsu">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">DUI:</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="number" placeholder="XXXX-XXXX-XX" id="duiUsu"  name="DUI_Usu" style="width:150px;height:40px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="usuario" class="col-sm-12 col-md-2 col-form-label">Usuario:</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Nombre de Usuario" id="nombreusuUsu"  name="NombreUsu_Usu" style="width:600px;height:40px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contrasena" class="col-sm-12 col-md-2 col-form-label">Contraseña:</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="password" placeholder="******" id="contrasenaUsu"  name="Contrasena_Usu" style="width:150px;height:40px">
                            </div>
                        </div><br>
                        <hr width="75%" />
                        <div class="form-group" align="center">
                            <button title="Aceptar" type="button" class="btn btn-success fa fa-check" onclick="validarUsuario();"></button>
                            <button title="Cancelar" type="reset" value="Cancelar" class="btn btn-warning fa fa-times" style="color:#fff"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include("Generalidadespantalla/cierre.php"); ?>
        <script src="../assets/Validaciones/validarUsuario.js"></script>
    </div>
</body>
</html>
