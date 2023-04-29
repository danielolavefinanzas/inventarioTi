<?php include('../cerrarSesion/destruirSesion.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <--Bootstrap--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- <--Fonts Icon-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../../css/navIngresar.css">

    <title>Ingresar Modelo</title>
</head>
<body>
    <?php 
        include('../templates/nav/navIngresar.php');
    ?>
    <br><br><br><br>
    <div class="container mt-5 text-center">
        <div class="row">
            <?php include('../formularios/formIngresarModelo.php'); ?>
        </div>
        <div class="text-center mt-5">
            <h5 style="color: #adadad">No puede eliminar un modelo asignado a un registro </h5>
        </div>
        <div class=" col-md-12 mt-5  ">
            <table  class="table table-striped table-hover" >
                <thead >
                    <tr >
                        <th>Modelos</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php include('../crud/mostrarRegistros/mostrarModelo.php');?>       
                </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript"> const borrar =()=>{ 
        if (!confirm("¿Desea borrar este campo?")) { event.preventDefault();}};
    </script>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</html>