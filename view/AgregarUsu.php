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
                    <a href="index.php">Inicio</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="/phpSISAUTO/view/Usuarios.php">Usuarios</a>
                </li>
                <li class="breadcrumb-item">
                    <a>Registrar Usuario</a>
                </li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-user"></i> Registrar Usuario</div>
                <div class="card-body">
                    <form action="../Controlador/usuarioC.php" method="POST" id="guardarUsu" align="center" autocomplete="off">
                        <h5 align="center">Datos Generales</h5>
                        <hr width="75%" style="background-color:#007bff;"/><br>
                        <input type="hidden" value="GuardarUsu" name="bandera"></input>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="nombre" class="col-sm-12 col-md-3 col-form-label">Nombre:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" placeholder="Nombre Completo" type="text" id="nombreUsu" name="Nombre_Usu" style="width:600px;height:40px"  onkeypress="return validarNombreCompletoUsuario(this,event,this.value)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label  for="tel3" class="col-sm-12 col-md-3 col-form-label">Teléfono:</label>
                            <div  class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" id="telefonoUsu" placeholder="9999-9999" data-inputmask="'mask' : '9999-9999'" name="Telefono_Usu" style="width:150px;height:40px" onkeypress="return validarTel(this,event,this.value)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="nombre" class="col-sm-12 col-md-3 col-form-label">Correo:</label>
                            <div class="col-sm-12 col-md-2">
                                <input class="form-control" id="email" placeholder="Correo Electrónico" type="text" name="Correo_Usu" style="width:600px;height:40px" onkeyup="validarCorreo(this)"><a id='correoUsu'></a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="direccion" class="col-sm-12 col-md-3 col-form-label">Dirección:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" placeholder="Dirección" name="Direccion_Usu" style="width:600px;height:40px" id="direccionUsu">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label class="col-sm-12 col-md-3 col-form-label">DUI:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" placeholder="99999999-9" id="duiUsu"  name="DUI_Usu" style="width:150px;height:40px" onkeypress="return validarDUI(this,event,this.value)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="usuario" class="col-sm-12 col-md-3 col-form-label">Usuario:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" placeholder="Nombre de Usuario" id="nombreusuUsu" name="NombreUsu_Usu" style="width:600px;height:40px" onkeypress="return validarNombreUsuario(this,event,this.value)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="contrasena" class="col-sm-12 col-md-3 col-form-label">Contraseña:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="password" placeholder="******" id="contrasenaUsu" name="Contrasena_Usu" style="width:150px;height:40px" onkeypress="return validarContrasena(this,event,this.value)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="contrasena" class="col-sm-12 col-md-3 col-form-label">Vuelve a escribir la contraseña:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="password" placeholder="******" id="contrasenaUsu2" name="Contrasena_Usu2" style="width:150px;height:40px" onkeypress="return validarContrasena(this,event,this.value)"  onkeyup="validarContrasena2(this)"><a id='contrasenaUsu2'></a>
                            </div>
                        </div><br>
                        <hr width="75%"/>
                        <div class="form-group" align="center">
                            <button title="Aceptar" type="button" class="btn btn-success" onclick="validarUsuario();">Aceptar</button>
                            <button title="Cancelar" type="reset" value="Cancelar" class="btn btn-warning" style="color:#fff">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include("Generalidadespantalla/cierre.php"); ?>
        <script src="../assets/Validaciones/validarUsuario.js"></script>
        <script src="../assets/Validaciones/validarDUI.js"></script>
        <script src="../assets/Validaciones/validarTelefono.js"></script>
        <script src="../assets/Validaciones/validarContrasena.js"></script>
        <script src="../assets/Validaciones/validarNombreUsuario.js"></script>
        <script src="../assets/Validaciones/validarNombreCompletoUsuario.js"></script>
        <script src="../assets/Validaciones/validarCorreo.js"></script>
    </div>
</body>
</html>
