<?php
session_start();
if (isset($_SESSION['usuarioActivo'])) {
    ?>
    <!DOCTYPE html>
    <!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.
    -->
    <html><?php include("Generalidadespantalla/apertura.php"); ?>
        <body class="fixed-nav sticky-footer bg-dark" id="page-top">
            <?php include("Generalidadespantalla/Menu.php"); ?>
            <?php $cate = array(1 => "AMORTIGUADORES", 2 => "BUJÍAS", 3 => "COMBUSTIBLE", 4 => "ELÉCTRICO", 5 => "ENFRIAMIENTO", 6 => "FILTROS", 7 => "MOTOR", 8 => "SENSORES", 9 => "SUSPENSIÓN Y DIRECCIÓN", 10 => "TRANSMISIÓN Y EMBRAGUE", 11 => "UNIVERSALES"); ?>
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
                    <?php
                    if (!isset($_GET['tipo'])) {
                        $tipo = 1;
                    } else {
                        $tipo = $_GET['tipo'];
                    }
                    ?>
                    <?php
                    $sql = "SELECT * from producto where tipo_Prod='$tipo' order by idProducto ASC";
                    $productos = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
                    ?>

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
                            <?php if ($tipo == 1) { ?>
                                <a class="pull-right" href="/phpSISAUTO/view/Producto.php?tipo=0">
                                    <button class="btn btn-primary">
                                        Ver productos inactivos  <i class="fa fa-bars"></i>
                                    </button>
                                    <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  -->
                                </a>

                            <?php } else { ?>
                                <a class="pull-right" href="/phpSISAUTO/view/Producto.php?tipo=1">
                                    <button class="btn btn-primary">
                                        Ver productos activos <i class="fa fa-bars"></i>
                                    </button>
                                    <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  -->
                                </a>

                            <?php } ?>
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

                                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th style="width:35px">Codigo</th>
                                                    <th style="width:80px">Nombre</th>
                                                    <th style="width:90px">Categoria</th>
                                                    <th style="width:95px">Marca</th>
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
        <!--                                                    <td><?php
                                                        if ($cate[$producto['categoria_Prod']] != 'UNIVERSALES') {
                                                            echo $producto['modeloVehiculo_Prod'];
                                                        } else {
                                                            echo "-";
                                                        }
                                                        ?></td>
                                                        <td><?php
                                                        if ($cate[$producto['categoria_Prod']] != 'UNIVERSALES') {
                                                            echo $producto['anioVehiculo_Prod'];
                                                        } else {
                                                            echo "-";
                                                        }
                                                        ?></td> 
                                                        si solo cambia  $producto['anioVehiculo_Prod'] por el valor que ya esta en la columna-->
                                                        <th align="center">
                                                            <button title="Ver"type="button" class="btn btn-info fa fa-eye" data-toggle="modal" data-target="#modalVerProducto" href="" onclick="mostrarProduc('<?php echo $producto['codigo_Prod'] ?>', '<?php echo $producto['nombre_Prod'] ?>', '<?php echo $producto['categoria_Prod'] ?>', '<?php echo $producto['marca_Prod'] ?>', '<?php echo $producto['modeloVehiculo_Prod'] ?>', '<?php echo $producto['anioVehiculo_Prod'] ?>', '<?php echo $producto['descripcion_Prod'] ?>');"></button>
                                                            <?php if ($tipo == 1) {
                                                                ?>
                                                                <button title="Editar" type="button" class="btn btn-primary fa fa-pencil-square-o" data-toggle="modal" data-target="#modalEditarProducto" onclick="editarProduc('<?php echo $producto['codigo_Prod'] ?>','<?php echo $producto['nombre_Prod'] ?>','<?php echo $producto['categoria_Prod'] ?>','<?php echo $producto['marca_Prod'] ?>','<?php echo $producto['modeloVehiculo_Prod'] ?>','<?php echo $producto['anioVehiculo_Prod'] ?>','<?php echo $producto['descripcion_Prod']?>');"></button>
                                                            <?php
                                                            } else {
                                                                
                                                            }
                                                            ?>
                                                            <?php if ($tipo == 1) {
                                                                ?>
                                                                <button title="Dar de baja" type="button" class="btn btn-danger fa fa-arrow-circle-down" onclick="baja(<?php echo $producto['idProducto'] ?>)"></button>                                                
                                                            <?php } else { ?>
                                                                <button title="Dar de alta" type="button" class="btn btn-success fa fa-arrow-circle-up" onclick="alta(<?php echo $producto['idProducto'] ?>)" ></button>
        <?php } ?>
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

                <!-- MODAL VER PRODUCTO -->
                <div class="modal fade" id="modalVerProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color:#007bff;">

                                <h5 class="modal-title" id="myModalLabel"> <i class="fa fa-user"></i> Productos</h5>
                            </div>
                            <div class="modal-body">
                                <form action="../Controlador/productoC.php" method="POST" align="center" id="guardarProd" autocomplete="off">
                                    <hr width="75%" style="background-color:#007bff;"/>
                                    <input type="hidden" value="guardar" name="bandera"></input>
                                    <div class="form-group row">
                                        <div class="col-sm-12 col-md-1">
                                        </div>
                                        <label for="codigoP" class="col-sm-12 col-md-3 col-form-label">Codigo de producto:</label>
                                        <div class="col-sm-12 col-md-8">
                                            <input class="form-control" type="text" id="codigoP" name="codigoP" style="width:400px;height:40px" readonly="readonly" disabled="true" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 col-md-1">
                                        </div>
                                        <label  for="nombreP" class="col-sm-12 col-md-3 col-form-label">Nombre de producto:</label>
                                        <div  class="col-sm-12 col-md-8">
                                            <input class="form-control" type="text" id="nombreP" name="nombreP" style="width:400px;height:40px" disabled="true">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 col-md-1">
                                        </div>
                                        <label for="cateP" class="col-sm-12 col-md-3 col-form-label">Categoria de producto:</label>
                                        <div class="col-sm-12 col-md-8">
                                            <input class="form-control" type="number" id="cateP" name="cateP" style="width:150px;height:40px" value="" disabled="true">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 col-md-1">
                                        </div>
                                        <label for="marcaP" class="col-sm-12 col-md-3 col-form-label">Marca de pruducto:</label>
                                        <div class="col-sm-12 col-md-8">
                                            <input class="form-control" type="text" name="marcaP" style="width:400px;height:40px" id="marcaP" disabled="true">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 col-md-1">
                                        </div>
                                        <label for="modeloP" class="col-sm-12 col-md-3 col-form-label">Modelo de Vehiculo:</label>
                                        <div class="col-sm-12 col-md-8">
                                            <input class="form-control" type="text" id="modeloP" name="modeloP" style="width:400px;height:40px" disabled="true">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 col-md-1">
                                        </div>
                                        <label for="anioP" class="col-sm-12 col-md-3 col-form-label">año del vehiculo:</label> 
                                        <div class="col-sm-12 col-md-8">
                                            <input class="form-control" type="number" id="anioP" name="anioP" style="width:150px;height:40px" disabled="true" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 col-md-1">
                                        </div>
                                        <label for="codigoP" class="col-sm-12 col-md-3 col-form-label">Descripción:</label>
                                        <div class="col-sm-12 col-md-1">
                                            <textarea rows="3" cols="50" name="descripcion" id="descripcionP" value="" disabled="true">
                                            </textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#007bff;">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>    
                <!-- MODAL EDITAR PRODUCTO -->
                <div class="modal fade" id="modalEditarProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color:#007bff;">

                                <h5 class="modal-title" id="myModalLabel"> <i class="fa fa-user"></i> Productos</h5>
                            </div>
                            <div class="modal-body">
                                <form action="../Controlador/productoC.php" method="POST" align="center" id="editarProd" autocomplete="off">
                                    <hr width="75%" style="background-color:#007bff;"/>
                                    <input type="hidden" value="EditarProd" name="bandera"></input>
                                    <input type="hidden" value='' id="idProducto" name="idProducto"></input>
                                    <div class="form-group row">
                                        <div class="col-sm-12 col-md-1">
                                        </div>
                                        <label for="codigoP" class="col-sm-12 col-md-3 col-form-label">Codigo de producto:</label>
                                        <div class="col-sm-12 col-md-8">
                                            <input class="form-control" type="text" id="codigoPE" name="codigoP" style="width:400px;height:40px" readonly="readonly" disabled="true" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 col-md-1">
                                        </div>
                                        <label  for="nombreP" class="col-sm-12 col-md-3 col-form-label">Nombre de producto:</label>
                                        <div  class="col-sm-12 col-md-8">
                                            <input class="form-control" type="text" id="nombrePE" name="nombreP" style="width:400px;height:40px" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 col-md-1">
                                        </div>
                                        <label for="cateP" class="col-sm-12 col-md-3 col-form-label">Categoria de producto:</label>
                                        <div class="col-sm-12 col-md-8">
                                            <input class="form-control" type="number" id="catePE" name="cateP" style="width:150px;height:40px" value="" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 col-md-1">
                                        </div>
                                        <label for="marcaP" class="col-sm-12 col-md-3 col-form-label">Marca de pruducto:</label>
                                        <div class="col-sm-12 col-md-8">
                                            <input class="form-control" type="text" name="marcaP" style="width:400px;height:40px" id="marcaPE" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 col-md-1">
                                        </div>
                                        <label for="modeloP" class="col-sm-12 col-md-3 col-form-label">Modelo de Vehiculo:</label>
                                        <div class="col-sm-12 col-md-8">
                                            <input class="form-control" type="text" id="modeloPE" name="modeloP" style="width:400px;height:40px">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 col-md-1">
                                        </div>
                                        <label for="anioP" class="col-sm-12 col-md-3 col-form-label">año del vehiculo:</label> 
                                        <div class="col-sm-12 col-md-8">
                                            <input class="form-control" type="number" id="anioPE" name="anioP" style="width:150px;height:40px" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 col-md-1">
                                        </div>
                                        <label for="codigoP" class="col-sm-12 col-md-3 col-form-label">Descripción del producto:</label>
                                        <div class="col-sm-12 col-md-1">
                                            <textarea rows="3" cols="50" name="descripcion" id="descripcionPE" >
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" id="anterior" value=""  />
                                        <button type="button" class="btn btn-default" style="background-color:#007bff;" onclick="validarProductoEditar()">Aceptar</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#007bff;">Cerrar</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <form method="POST" id="cambioProd">
                        <input type="hidden" name="id" id="idProd"  />
                        <input type="hidden" name="bandera" id="banderaProd" />
                        <input type="hidden" name="valor" id="valorProd" />
                    </form>
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
                            <a class="btn btn-primary" href="view/login.php">Cerrar Sesión</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("Generalidadespantalla/cierre.php"); ?>
            <!-- Bootstrap core JavaScript-->
            <script src="../assets/vendor/jquery/jquery.min.js"></script>
            <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="../assets/js/sb-admin.min.js"></script>

            <script src="../assets/Validaciones/mostrarProducto.js"></script>
            <script src="../assets/Validaciones/validarProducto.js"></script>
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

            <script>
                $(document).ready(function () {
                    $("#dataTabl").paginationTdA({
                        elemPerPage: 1
                    });
                });
            </script>
            <script src="pagination-tda-plugin.js"></script>

            <script type="text/javascript">
                function baja(id) {
                    swal({
                        title: '¿Está seguro en dar de baja?',
                        // text: "You won't be able to revert this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si',
                        cancelButtonText: 'No',

                    }).then((result) => {
                        if (result.value) {
                            $('#idProd').val(id);
                            $('#banderaProd').val('cambio');
                            $('#valorProd').val('0');
                            var dominio = window.location.host;
                            $('#cambioProd').attr('action', 'http://' + dominio + '/phpSISAUTO/Controlador/productoC.php');
                            $('#cambioProd').submit();
                        } else {

                        }
                    })
                }

                function alta(id) {
                    swal({
                        title: '¿Está seguro en dar de alta?',
                        // text: "You won't be able to revert this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si',
                        cancelButtonText: 'No',

                    }).then((result) => {
                        if (result.value) {
                            $('#idProd').val(id);
                            $('#banderaProd').val('cambio');
                            $('#valorProd').val('1');
                            var dominio = window.location.host;
                            $('#cambioProd').attr('action', 'http://' + dominio + '/phpSISAUTO/Controlador/productoC.php');
                            $('#cambioProd').submit();
                        } else {

                        }
                    })
                }
            </script>

    
        </body>
    </html>
    <?php
} else {
    ?>
    <!DOCTYPE HTML>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta http-equiv="refresh" content="0;URL=/phpSISAUTO/view/login.php">
        </head>
        <body>
        </body>
    </html>
    <?php
}
?>
