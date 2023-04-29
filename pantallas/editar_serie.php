<?php 
// include('../cerrarSesion/destruirSesion.php');
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar un Registro</title>
    <!-- <--Bootstrap--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- <--Fonts Icon-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/styleNavHome.css">
    <script src="https://kit.fontawesome.com/d59f14aa6e.js" crossorigin="anonymous"></script>

</head>
<body>
        <?php 
        // include('../../templates/nav/navHome.php');
         ?>
    <!-- CONTENEDOR  -->
    <div class="container grid p-4">
        <div class="row justify-content-center">
            <div class="col-md-7 mt-5">
                <div class="card card-body">
                    <!-- FORMULARIO PARA EDITAR  -->
                    <?php
                        include('../formularios/form_editar_serie.php');
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script>
    //     $('.editbtn').on('click', function (){
    //         $tr=$(this).closest('tr');
    //         var datos = $tr.children("td").map(function (){
    //             return $(this).text()
    //         });
    //         $('#serie_equipo').val(datos[0]);
    //         $('#marcas').val(datos[1]);
    //         $('#modelos').val(datos[2]);
    //         $('#tipo_equipo').val(datos[3]);
    //     });
    // </script>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</html>