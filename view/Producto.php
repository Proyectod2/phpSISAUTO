<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html><?php include("Generalidadespantalla/apertura.php"); ?>
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php include("Generalidadespantalla/Menu.php"); ?>
<?php $cate = array(1=>"AMORTIGUADORES",2=>"BUJÍAS",3=>"COMBUSTIBLE",4=>"ELÉCTRICO",5=>"ENFRIAMIENTO",6=>"FILTROS",7=>"MOTOR",8=>"SENSORES",9=>"SUSPENSIÓN Y DIRECCIÓN",10=>"TRANSMISIÓN Y EMBRAGUE",11=>"UNIVERSALES"); ?>
    <div class="content-wrapper" style="background-color:#eff3f4;">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Inicio</a>
                <li class="breadcrumb-item active">
                    <a>Produtos</a>
                </li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <h1 align="center"></h1>
                    <a class="pull-right" href="">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                            Reporte
                            <span class="fa fa-file-pdf-o"></span>
                        </button>
                    </a>
                    <a class="pull-right" href="http://localhost/phpSISAUTO/view/AgregarProd.php">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                            Agregar nuevo 
                            <span class="fa fa-plus"></span>
                        </button></a>
                    <br><br>
                    <!-- TABLA PRODUCTOS-->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-table"></i> Productos</div>
                        <form align="right" ><br>
                            <table class="pull-right " id="dataTable" width="100%" cellspacing="0" >
                                <thead>
                                    <tr>
                                        <th style="width:200px"></th>
                                        <th style="width:120px"><div class="input-group" style="width:500px" align="center">
                                                <input type="text" class="form-control" placeholder="Buscar" id="entradafilter" name="" align="center">
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
                                    <?php
                                    include("../confi/Conexion.php");
                                    $conexion = conectarMysql();
                                    $sql = "SELECT * from producto order by idProducto ASC";
                                    $productos = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
                                    ?>

                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th style="width:60px">Codigo</th>
                                                <th style="width:90px">Nombre</th>
                                                <th style="width:90px">Categoria</th>
                                                <th style="width:95px">Marca</th>
                                                <th style="width:50px">Modelo</th>
                                                <th style="width:70px">Año</th>
                                                <th align="center" style="width:2px">Acción</th>
                                            </tr>
                                        </thead>
                                        <tfoot class="contenidobusqueda">

                                            <?php While ($producto = mysqli_fetch_assoc($productos)) { ?>

                                                <tr>
                                                    <td><?php echo $producto['codigo_Prod'] ?></td>
                                                    <td><?php echo $producto['nombre_Prod'] ?></td>
                                                    <td><?php echo $cate[$producto['categoria_Prod']] ?></td>
                                                    <td><?php echo $producto['marca_Prod'] ?></td>
                                                    <!--<td><?php if($cate[$producto['categoria_Prod']]!='UNIVERSALES'){echo $producto['marca_Prod'];}else{echo "-";} ?></td>-->
                                                    <td><?php if($cate[$producto['categoria_Prod']]!='UNIVERSALES'){echo $producto['modeloVehiculo_Prod'];}else{echo "-";} ?></td>
                                                    <td><?php if($cate[$producto['categoria_Prod']]!='UNIVERSALES'){echo $producto['anioVehiculo_Prod'];}else{echo "-";} ?></td> 
                                                    <!--si solo cambia  $producto['anioVehiculo_Prod'] por el valor que ya esta en la columna-->
                                                    <th align="center">
                                                        <button title="Ver"type="button" class="btn btn-info fa fa-eye" data-toggle="modal" data-target="#modalVerProveedor" href="" onclick=""></button>
                                                <button title="Editar" type="button" class="btn btn-primary fa fa-pencil-square-o" data-toggle="modal" data-target="#modalEditarProveedor" onclick=""></button>
                                                
                                                <button title="Dar de baja" type="button" class="btn btn-danger fa fa-arrow-circle-down" onclick=""></button>                                                
                                                    </th>
                                                </tr>
                                            <?php } ?>
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
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>UES-FMP. DERECHOS RESERVADOS 2018</small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="view/login.html">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="../assets/vendor/jquery/jquery.min.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="../assets/js/sb-admin.min.js"></script>

    </div>
    
    <!-- Filtrado de la tabla -->
        <script type="text/javascript">
            $(document).ready(function () {
               $('#entradafilter').keyup(function () {
                  var rex = new RegExp($(this).val(), 'i');
                  $('.contenidobusqueda tr').hide();
                  $('.contenidobusqueda tr').filter(function () {
                    return rex.test($(this).text());
                }).show();
              })

           });
        </script>
</body>
</html>
