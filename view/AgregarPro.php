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
                    
                <li class="breadcrumb-item active">
                    <a href="http://localhost/phpSISAUTO/view/Proveedor.php">Proveedores</a>
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
                    <form action="../Controlador/proveedorC.php" method="POST" align="center" autocomplete="off">
                        <h5 align="center">Datos Generales</h5><br>
                        <!-- <div class="form-group row">
                            <label for="num" class="col-sm-12 col-md-2 col-form-label">Código Proveedor:</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="number" id="num" placeholder="ID" style="width:150px;height:40px">
                            </div>
                        </div> -->
                        <input type="hidden" value="guardar" name="bandera"></input>
                        <div class="form-group row">
                            <label for="empresa" class="col-sm-12 col-md-2 col-form-label">Nombre de la Empresa:</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" placeholder="Nombre Completo" type="text" id="empresa" name="Nombre_Emp" style="width:600px;height:40px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="empresa" class="col-sm-12 col-md-2 col-form-label">Correo:</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" placeholder="Correo empresa" type="text" id="empresa" name="Correo_Emp" style="width:600px;height:40px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  for="tele1" class="col-sm-12 col-md-2 col-form-label">Teléfono:</label>
                            <div  class="col-sm-12 col-md-10">
                                <input class="form-control" type="tel" id="tele1" placeholder="XXXX-XXXX" name="Telefono_Emp" style="width:110px;height:40px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="direccion" class="col-sm-12 col-md-2 col-form-label">Dirección:</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Dirección" name="Direccion_Emp" style="width:600px;height:40px" id="direccion">
                            </div>
                        </div><br>
                        <hr size="50" style="background-color: #78bab9"/><br>
                        <h5 align="center">Datos del Responsable</h5><br>
                        <div class="form-group row">
                            <label for="responsable" class="col-sm-12 col-md-2 col-form-label">Nombre del Responsable:</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Nombre Completo" name="Nombre_Res" style="width:600px;height:40px" id="responsable">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tel2" class="col-sm-12 col-md-2 col-form-label">Teléfono:</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="tel" data-mask="9999-9999" placeholder="XXXX-XXXX" name="Telefono_Res" style="width:110px;height:40px" id="tel2">
                            </div>
                        </div><br>
                        <hr width="75%" />
                        <div class="form-group" align="center">
                            <button title="Aceptar" type="submit" class="btn btn-success fa fa-check"></button>
                            <button title="Cancelar" type="button" class="btn btn-warning fa fa-times" style="color:#fff"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include("Generalidadespantalla/cierre.php"); ?>
</body>
</html>


