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
<html>
    
<?php include("Generalidadespantalla/apertura.php"); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->

<?php include("Generalidadespantalla/Menu.php"); ?>

    <div class="content-wrapper" style="background-color:#eff3f4;">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Inicio</a>
                </li>
                <li class="breadcrumb-item active"> Clientes</li>
            </ol>
            <?php if (!isset($_GET['tipo'])) { 
                $tipo=1;
            }else{
                $tipo = $_GET['tipo'];
            }?>
            <?php 
            $sql="SELECT * from cliente where tipo_Cli='$tipo' order by nombre_Cli ASC";
            $clientes= mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta"); ?>

            <div class="row">
                <div class="col-12">
                    <a class="pull-right" href="">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                            Reporte
                            <span class="fa fa-file-pdf-o"></span>
                        </button>
                    </a>
                    <a class="pull-right" href="/phpSISAUTO/view/AgregarCli.php">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                            Agregar nuevo 
                            <span class="fa fa-plus"></span>
                        </button>
                    </a>
                    <?php  if ($tipo == 1) { ?>
                        <a class="pull-right" href="/phpSISAUTO/view/Cliente.php?tipo=0">
                            <button class="btn btn-primary">
                                Ver proveedores inactivos  <i class="fa fa-bars"></i>
                            </button>
                            <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  -->
                        </a>
                        
                    <?php  }else{ ?>
                        <a class="pull-right" href="/phpSISAUTO/view/Cliente.php?tipo=1">
                            <button class="btn btn-primary">
                                Ver proveedores activos <i class="fa fa-bars"></i>
                            </button>
                            <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  -->
                        </a>
                        
                    <?php } ?>
                    <br><br>
                    <!-- TABLA CLIENTES-->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-table"></i> Clientes
                        </div>
                        <form align="right" ><br>
                            <table class="pull-right " id="dataTable" width="100%" cellspacing="0" >
                                <thead>
                                    <tr>
                                        <th style="width:200px"></th>
                                        <th style="width:120px"><div class="input-group" style="width:500px" align="center">
                                                <input type="text" class="form-control" id="entradafilter" placeholder="Buscar" name="" align="center">
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
                                            <th style="width:175px">Nombre</th>
                                            <!-- <th style="width:175px">Dirección</th> -->
                                            <th style="width:85px">Teléfono</th>
                                            <th style="width:85px">NCR</th>
                                            <th style="width:85px">NIT</th>
                                            <th align="center" style="width:2px">Acción</th>
                                        </tr>
                                    </thead>
                                    <tfoot class="contenidobusqueda">
                                    <?php While($cliente=mysqli_fetch_assoc($clientes)){?>
                                        <tr>
                                            <td><?php echo $cliente['nombre_Cli'] ?></td>
                                            <td><?php echo $cliente['telefono_Cli'] ?></td>
                                            <td><?php echo $cliente['nrc_Cli'] ?></td>
                                            <td><?php echo $cliente['nit_Cli'] ?></td>
                                                                                       
                                            <th align="center">
                                                <button title="Ver" type="button" class="btn btn-info fa fa-eye" data-toggle="modal" data-target="#modalVerCliente" href="" onclick="mostrarCli('<?php echo $cliente['nombre_Cli']?>','<?php echo $cliente['direccion_Cli']?>','<?php echo $cliente['telefono_Cli']?>','<?php echo $cliente['nrc_Cli']?>','<?php echo $cliente['nit_Cli']?>','<?php echo $cliente['descripcion_Cli']?>');"></button>
                                               <?php  if ($tipo == 1) {
                                                ?>
                                                <button title="Editar" type="button" class="btn btn-primary fa fa-pencil-square-o" data-toggle="modal" data-target="#modalEditarCliente" onclick="editarCli('<?php echo $cliente['nombre_Cli']?>','<?php echo $cliente['direccion_Cli']?>','<?php echo $cliente['telefono_Cli']?>','<?php echo $cliente['nrc_Cli']?>','<?php echo $cliente['nit_Cli']?>','<?php echo $cliente['idCliente']?>','<?php echo $cliente['descripcion_Cli']?>');"></button>
                                                 <?php  }else{ }?>
                                                <?php  if ($tipo == 1) {
                                                ?>
                                                <button title="Dar de baja" type="button" class="btn btn-danger fa fa-arrow-circle-down" onclick="baja(<?php echo $cliente['idCliente'] ?>)"></button>
                                                <?php  }else{ ?>
                                                <button title="Dar de alta" type="button" class="btn btn-success fa fa-arrow-circle-up" onclick="alta(<?php echo $cliente['idCliente'] ?>)"></button>
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
    </div>

             <!-- MODAL VER CLIENTE -->

<div class="modal fade" id="modalVerCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#007bff;">

                    <h5 class="modal-title" id="myModalLabel"> <i class="fa fa-user"></i> Cliente</h5>
                </div>
                <div class="modal-body">
                    <form action="../Controlador/clienteC.php" method="POST"  align="center" autocomplete="off">
                        <h5 align="center">Datos Generales</h5>
                        <hr width="75%" style="background-color:#007bff;"/>
                        <input type="hidden" value="GuardarCli" name="bandera"></input>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="nombre" class="col-sm-12 col-md-3 col-form-label">Nombre:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" id="nombre" name="NombreC" style="width:400px;height:40px" readonly="readonly" aria-required="true" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label  for="tel3" class="col-sm-12 col-md-3 col-form-label">Dirección:</label>
                            <div  class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" id="direccion" name="DireccionC" style="width:400px;height:40px" disabled="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="nombre" class="col-sm-12 col-md-3 col-form-label">Teléfono:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" id="telefono" name="TelefonoC" style="width:150px;height:40px" value="" disabled="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="direccion" class="col-sm-12 col-md-3 col-form-label">NRC:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" name="NRC" style="width:150px;height:40px" id="nrc" disabled="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="direccion" class="col-sm-12 col-md-3 col-form-label">NIT:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" name="NIT" style="width:200px;height:40px" id="nit" disabled="true">
                            </div>
                        </div>
                         <div id="ocultar">
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="usuario" class="col-sm-12 col-md-3 col-form-label">Descripción:</label> 
                            <div class="col-sm-12 col-md-8">
                               <textarea class="form-control" type="text" name="descripcion"  placeholder="Escriba aqui..." id="descripcionCli" style="width:400px;height:80px" disabled="true">
                               </textarea>
                            </div>
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
      <!-- MODAL EDITAR CLIENTE -->
<div class="modal fade" id="modalEditarCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#007bff;">

                    <h5 class="modal-title" id="myModalLabel"> <i class="fa fa-user"></i> Editar Cliente</h5>
                </div>
                <div class="modal-body">
                    <form action="../Controlador/clienteC.php" method="POST" id="editarCli" align="center" autocomplete="off">
                        <h5 align="center">Datos Generales</h5>
                        <hr width="75%" style="background-color:#007bff;"/>
                        <input type="hidden" value="EditarCli" name="bandera"></input>
                        <input type="hidden" value="" name="idcliente" id="idcliente"></input>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="nombre" class="col-sm-12 col-md-3 col-form-label">Nombre:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" id="nombreCliEditar" name="nombreCli" style="width:400px;height:40px" aria-required="true" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label  for="correo" class="col-sm-12 col-md-3 col-form-label">Dirección:</label>
                            <div  class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" id="direccionCliEditar"  name="direccionCli" style="width:400px;height:40px" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="nombre" class="col-sm-12 col-md-3 col-form-label">Teléfono:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" id="telefonoCliEditar" data-mask="9999-9999" name="telefonoCli" style="width:150px;height:40px" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="direccion" class="col-sm-12 col-md-3 col-form-label">NCR:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" name="nrcCli" id="nrcCliEditar" style="width:150px;height:40px" readonly="readonly"aria-required="true" value="" >
                            </div>
                        </div>
                         <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="direccion" class="col-sm-12 col-md-3 col-form-label">NIT:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" name="nitCli" id="nitCliEditar" style="width:175px;height:40px" readonly="readonly"aria-required="true" value="" >
                            </div>
                        </div>
                         <hr width="75%" style="background-color:#007bff;"/>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="usuario" class="col-sm-12 col-md-3 col-form-label">Descripción:</label> 
                            <div class="col-sm-12 col-md-8">
                               <textarea class="form-control" type="text" name="descripcion"  placeholder="Escriba aqui porque va a modificar el nombre de la empresa " id="descripcionCliEditar" style="width:400px;height:80px">
                               </textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                             <input type="hidden" id="anterior" value=""  />
                          <button type="button" class="btn btn-default" style="background-color:#007bff;" onclick="validareditarCliente()">Aceptar</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#007bff;">Cerrar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <form method="POST" id="cambioCli">
            <input type="hidden" name="id" id="idCli"  />
            <input type="hidden" name="bandera" id="banderaCli" />
            <input type="hidden" name="valor" id="valorCli" />
        </form>
    </div>

 <?php include("Generalidadespantalla/cierre.php"); ?>

 <script src="../assets/Validaciones/mostrarCliente.js"></script>
  <script src="../assets/Validaciones/validarCliente.js"></script> 

        <script type="text/javascript">
   //FILTRADO DE LA TABLA
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

       <!-- DAR DE BAJA -->
        <script type="text/javascript">
            function baja(id){
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
                if(result.value){
                $('#idCli').val(id);
                $('#banderaCli').val('cambio');
                $('#valorCli').val('0');
                var dominio = window.location.host;
                 $('#cambioCli').attr('action','http://'+dominio+'/phpSISAUTO/Controlador/clienteC.php');
                 $('#cambioCli').submit();
                 }else{

                }
            })
            }
     //DAR DE ALTA 
            function alta(id){
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
                if(result.value){
                $('#idCli').val(id);
                $('#banderaCli').val('cambio');
                $('#valorCli').val('1');
                var dominio = window.location.host;
                 $('#cambioCli').attr('action','http://'+dominio+'/phpSISAUTO/Controlador/clienteC.php');
                 $('#cambioCli').submit();
                 }else{

                 }
            })
            }
        </script>

</body>
</html>
<?php
}else{
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

