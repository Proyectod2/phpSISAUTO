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
                    <a href="view/index.html">Inicio</a>
                </li>
                <li class="breadcrumb-item active">Proveedores</li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <h1 align="center"></h1>
                    <a class="pull-right" href="http://localhost/phpSISAUTO/view/AgregarPro.php">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                            Agregar nuevo 
                            <span class="fa fa-plus"></span>
                        </button></a>
                    <a class="pull-right" href="">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                            Reporte
                            <span class="fa fa-file-pdf-o"></span>
                        </button>
                    </a><br><br>
                    <!-- TABLA CLIENTES-->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-table"></i> Proveedores</div>
                            <form align="right" ><br>
                            <table class="pull-right " id="dataTable" width="100%" cellspacing="0" >
                                <thead>
                                    <tr>
                                        <th style="width:200px"></th>
                                        <th style="width:120px"><div class="input-group" style="width:500px" align="center">
                                                <input type="text" class="form-control" placeholder="Buscar" name="" align="center">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-default" type="submit" title="Buscar"><i class="fa fa-search" ></i></button>
                                                </div>
                                            </div></th>
                                    </tr>
                                </thead>
                            </table>
                        </form>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width:30px">Código</th>
                                            <th style="width:175px">Empresa</th>
                                            <th style="width:85px">Teléfono</th>
                                            <th style="width:175px">Dirección</th>
                                            <th style="width:175px">Responsable</th>
                                            <th align="center" style="width:2px">Acción</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th align="center">
                                                <button title="Editar" type="button" class="btn btn-primary fa fa-pencil-square-o"></button>
                                                <button title="Eliminar" type="button" class="btn btn-danger fa fa-trash"></button>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Ultima actualización </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <?php include("Generalidadespantalla/cierre.php"); ?>
</body>
</html>
