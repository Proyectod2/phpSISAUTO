<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<script src="../assets/Validaciones/validarProveedor.js"></script>
<?php include("Generalidadespantalla/apertura.php"); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

 <?php include("Generalidadespantalla/Menu.php"); ?>

 <div class="content-wrapper" style="background-color:#eff3f4;">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Inicio</a>

                <li class="breadcrumb-item active">
                    <a href="/phpSISAUTO/view/Proveedor.php">Proveedores</a>
                </li>
                <li class="breadcrumb-item">
                    <a>Registrar Proveedor</a>
                </li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class=""></i> Registrar Proveedor</div>
                    <div class="card-body">
                        <form action="../Controlador/proveedorC.php" method="POST" id="guardarPro" align="center" autocomplete="off">
                            <h5 align="center">Datos Generales</h5><br>
                            <input type="hidden" value="guardar" name="bandera"></input>
                            <div class="form-group row">
                                <label for="empresa" class="col-sm-12 col-md-2 col-form-label">Nombre de la Empresa:</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" placeholder="Nombre Completo" type="text" id="nombreEmp" name="Nombre_Emp" style="width:600px;height:40px" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="empresa" class="col-sm-12 col-md-2 col-form-label">Correo:</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" placeholder="Correo Electrónico" type="text" id="email" name="Correo_Emp" style="width:600px;height:40px" onkeyup="validarCorreoProv(this)"><a id='correoPro'></a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  for="tele1" class="col-sm-12 col-md-2 col-form-label">Teléfono:</label>
                                <div  class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" id="telefonoEmp" placeholder="9999-9999" data-inputmask="'mask' : '9999-9999'" name="Telefono_Emp" style="width:110px;height:40px" onkeypress="return validarTelPro(this,event,this.value)"><a id='mensajitoTel'></a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="direccion" class="col-sm-12 col-md-2 col-form-label">Dirección:</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" placeholder="Dirección" id="direccionEmp" name="Direccion_Emp" style="width:600px;height:40px" >
                                </div>
                            </div><br>
                            <hr size="50" style="background-color: #78bab9"/><br>
                            <h5 align="center">Datos del Responsable</h5><br>
                            <div class="form-group row">
                                <label for="responsable" class="col-sm-12 col-md-2 col-form-label">Nombre del Responsable:</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" placeholder="Nombre Completo" name="Nombre_Res" style="width:600px;height:40px" id="nombreResp" onkeypress="return validarNombreCompletoProveedor(this,event,this.value)">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tel2" class="col-sm-12 col-md-2 col-form-label">Teléfono: </label>
                                <div class="col-sm-12 col-md-10">
                                <input type="tel" class="form-control" placeholder="9999-9999" data-mask="9999-9999" id="telefonoResp" name="Telefono_Res" maxlength="9" style="width:110px;height:40px" onkeypress="return validarTelProRes(this,event,this.value)"><a id='mensajitoTel'></a>
                                </div>
                            </div><br>
                            <hr width="75%" />
                            <div class="form-group" align="center">
                                <button title="Aceptar" type="button" class="btn btn-success " onclick="validarProveedor();">Aceptar</button>
                                <button title="Cancelar" type="reset" value="Cancelar" class="btn btn-warning " style="color:#fff">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php include("Generalidadespantalla/cierre.php"); ?>
            <script src="../assets/Validaciones/validarCorreo.js"></script>
            <script src="../assets/Validaciones/validarNombreCompletoUsuario.js"></script>
</body>
</html>
