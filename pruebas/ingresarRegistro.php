<?php 
    session_start();
    include('../conexiones/conexionRim.php');
    $usuario = $_SESSION['usuario'];
    if(!isset($usuario)){
        header('location: index.php');
    }
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Sistema de inventario</title>
    <!-- <--Bootstrap--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- <--Fonts Icon-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>
  <body>
    <!-- Navegación  -->
    <?php 
    // include('./nav/navHome.php'); 
    ?>
    <!-- CONTENEDOR  NUEVO REGISTRO-->
    
    <div class="container col-md-6 mt-5">
        <div class="row">
            <div class="card card-body ">
                    <!-- FORMULARIO DE REGISTRO  -->
                    <?php include('../formularios/formRegistro.php') ?>
            </div>
        </div>
            <!-- COLUMNA TABLA  -->
        <div class="container col-md-12 mt-5  ">
            <table  class="table table-striped table-hover" >
                <thead >
                    <?php 
                        include('../includes/contadorFilas.php');
                    ?>
                    <tr >
                        <!-- <th>Nombre</th>
                        <th>Serie</th> -->
                        <th>Serie Equipo</th>
                        <th>Orden Compra</th>
                        <th>Guia Despacho</th>
                        <th>Tipo</th>
                        <th>Recinto</th>
                        <th>Servicio</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Recepciona</th>
                        <th>Entrega</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php include('mostrarRegistro.php');?>       
                </tbody>
            </table>
        </div>
    </div>
    <!-- JS EVENTO BORRAR  -->
    <script type="text/javascript"> const borrar =()=>{ 
        if (!confirm("¿Desea borrar este campo?")) { event.preventDefault();}};
    </script>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

</html>