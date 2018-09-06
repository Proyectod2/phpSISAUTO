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
                        <a href="..view/index.html">Inicio</a>

                    <li class="breadcrumb-item active">
                        <a href="http://localhost/phpSISAUTO/view/Producto.php">Productos</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Registrar Producto</a>
                    </li>
                </ol>
                <!-- Example DataTables Card-->
                <!--<a class="pull-right" href="">-->
                <!--<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">-->
                <!--Nuevo-->
                <!--<span class="fa fa-new"></span>-->
                <!--</button>-->
                <!--</a><br><br>-->
                <div class="card-header">
                    <i class=""></i> Registrar Producto</div>
                <div class="card-body">
                    <form action="../Controlador/productoC.php" method="POST" align="center" id="guardarProd" autocomplete="off">
                        <input type="hidden" value="guardar" name="bandera"></input>
                        <div class="form-group row">
                            <label for="nombreP" class="col-sm-12 col-md-2 col-form-label">Nombre:</label>
                            <div class="col-sm-12 col-md-10">
                                <input name="nombrePro" class="form-control" placeholder="Nombre del Producto" type="text" id="nombreP" style="width:600px;height:40px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="categoriaP" class="col-sm-12 col-md-2 col-form-label">Categoria:</label>
                            <div class="col-sm-12 col-md-10">
                                <select name="categorias" style="width:600px;height:40px" class="form-control" id="categoriaP"> 
                                    <option value="">[Selecionar Categoria]</option>
                                    <option value="Suspension">Suspensión</option>
                                    <option value="Direccion">Dirección</option>
                                    <option value="Electrico">Eléctrico</option>
                                    <option value="Friccion">Fricción</option>
                                    <option value="Rodamiento">Rodamiento</option>
                                    <option value="fajas">Fajas</option>
                                    <option value="Carburacion">Carburación</option>
                                    <option value="Bomba">Bomba</option>
                                    <option value="Cricos">Cricos</option>
                                    <option value="Soporte de motor">Soportes de motor</option>
                                    <option value="Distribucion">Distribución</option>
                                    <option value="Soporte de caja">Soporte de caja</option>
                                    <option value="Soporte de cardan">Soporte de cardan</option>
                                    <option value="Lubricacion">Lubricación</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="marcaP" class="col-sm-12 col-md-2 col-form-label">Marca:</label>
                            <div class="col-sm-12 col-md-10">
                                <select style="width:600px;height:40px" class="form-control" name="marca" id="marcaP"> 
                                    <option value="">[Selecionar Marca]</option>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Suzuki">Suzuki</option>
                                    <option value="Honda">Honda</option>
                                    <option value="Mazda">Mazda</option>
                                    <option value="Chevrolet">Chevrolet</option>
                                    <option value="Kia">Kia</option>
                                    <option value="BMW">BMW</option>
                                    <option value="Nissan">Nissan</option>
                                    <option value="Mitsubichi">Mitsubishi</option>
                                    <option value="Ford">Ford</option>
                                    <option value="Mercedez-Benz">Mercedez-Benz</option>
                                    <option value="Hyundai">Hyundai</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="modeloP" class="col-sm-12 col-md-2 col-form-label">Modelo:</label>
                            <div class="col-sm-12 col-md-10">
                                <select style="width:600px;height:40px" class="form-control" name="modelo" id="modeloP"> 
                                    <option value="">[Selecionar Modelo]</option>
                                    <option value="Corolla">Corolla</option>
                                    <option value="Yaris">Yaris</option>
                                    <option value="RAV4">RAV4</option>
                                    <option value="Land Cruiser Coronela">Land Cruiser Coronela</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="anioP" class="col-sm-12 col-md-2 col-form-label">Año:</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="number" id="anioP" name="anio" placeholder="Año" style="width:150px;height:40px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="descripcionP" class="col-sm-12 col-md-2 col-form-label">Descripción:</label>
                            <div class="col-sm-12 col-md-2">
                                <!--wrap="hard"-->
                                <textarea rows="3" cols="75" name="descripcion"  placeholder="Escriba aqui..." id="descripcionP">
                                </textarea>
                            </div>
                        </div><br>
                        <hr width="75%" />
                        <div class="form-group" align="center">
                            <button title="Aceptar" type="button" class="btn btn-success fa fa-check" onclick="validarProducto();"></button>
                            <button title="Cancelar" type="button" class="btn btn-warning fa fa-times" style="color:#fff"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include("Generalidadespantalla/cierre.php"); ?>
        <script src="../assets/Validaciones/validarProducto.js"></script>
    </body>
</html>


