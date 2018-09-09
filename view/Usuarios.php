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
                <li class="breadcrumb-item active">Control Usuarios</li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <a class="pull-right" href="">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                            Reporte
                            <span class="fa fa-file-pdf-o"></span>
                        </button>
                    </a>
                    <a class="pull-right" href="/phpSISAUTO/view/AgregarUsu.php">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                            Agregar nuevo
                            <span class="fa fa-plus"></span>
                        </button>
                    </a>
                    <br><br>
                    <!-- TABLA CLIENTES-->
                    <div class="card mb-3">
                        <div class="card-header" style="background-color:#eff3f4;">
                            <i class="fa fa-users"></i> Usuarios</div>
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
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </form>
                        <div class="card-body">
                            <div class="table-responsive">
                            <?php include("../confi/Conexion.php"); 
                            $conexion = conectarMysql();
                            $sql="SELECT * from usuario order by nombre_Usu ASC";
                            $usuarios= mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta"); ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width:175px">Nombre</th>
                                            <th style="width:175px">Dirección</th>
                                            <th style="width:85px">Correo</th>
                                            <th style="width:85px">Teléfono</th>
                                            <th style="width:85px">DUI</th>
                                            <th align="center" style="width:2px">Acción</th>
                                        </tr>
                                    </thead>
                                    <tfoot class="contenidobusqueda">
                                    <?php While($usuario=mysqli_fetch_assoc($usuarios)){?>
                                        <tr>
                                            <td><?php echo $usuario['nombre_Usu'] ?></td>
                                            <td><?php echo $usuario['direccion_Usu'] ?></td>
                                            <td><?php echo $usuario['correo_Usu'] ?></td>
                                            <td><?php echo $usuario['telefono_Usu'] ?></td>
                                            <td><?php echo $usuario['dui_Usu'] ?></td>
                                                                                       
                                            <th align="center">
                                                <button title="Editar" type="button" class="btn btn-primary fa fa-pencil-square-o"></button>
                                                <button title="Eliminar" type="button" class="btn btn-danger fa fa-trash"></button>
                                            </th>
                                        </tr>
                                        <?php } ?>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                        <div class="card-footer small text-muted"> </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
        <?php include("Generalidadespantalla/cierre.php"); ?>
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

        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
</body>
</html>
