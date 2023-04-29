<?php include('../cerrarSesion/destruirSesion.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Sistema de inventario</title>
    <!-- <--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- <--Fonts Icon-->
    <script src="http://10.7.120.220/Recursos/Scripts/jquery-3.6.0.min.js"></script>
    <!-- GOOGLE ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- CDN DataTable CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script src="https://kit.fontawesome.com/d59f14aa6e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styleNavHome.css">
    <link rel="stylesheet" href="../css/styleTabla.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> 
    
</head>

<body>
    <!-- Navegación  -->
    <?php include('../templates/nav/navHome.php'); ?>
    <!-- CONTENEDOR  -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div style="background-color: #fcfcfc;" class="card card-body">
                    <!-- FORMULARIO PARA EDITAR  -->
                    <?php
                    include('../formularios/formRegistrarSerie.php');
                    ?>
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div style="border: 1px solid  #d1d1d1; padding: 10px;">
                    <!-- FORMULARIO PARA EDITAR  -->
                    <h4 class="text-center mt-5"><strong>Asignar una orden de compra a la guía </strong> </h4>
                    <br>
                    <div class="d-grid gap-2">
                        <a href="./ingresarOrden.php" class="btn btn-outline-primary" type="button">Ir</a>
                    </div>
                    <br><br><br>
                </div>
            </div>
            <div class="container col-md-12 mt-5  ">
                <?php
                // include('../includes/contadorFilasSerie.php');
                ?>
            </div>
            <div class="container col-md-8 mt-5 mb-5 border " style="border: 1px solid black; border-radius:5px; background-color: #fcfcfc;">
                <h4 class="text-center mt-3 h4"><strong>Filtrar</strong> </h4>
                <table class="table  table-responsive" id="search">
                    <td id="search1"><strong>Serie</strong></td>
                    <td id="search2"><strong>Orden de Compra</strong></td>
                    <td id="search3"><strong>Guia despacho</strong></td>
                    <td id="search4"><strong>Proveedor</strong></td>
                </table>
            </div>
            <div class=" col-md-12 mt-5  ">
                <table id="dataTable" class="table  table-responsive mt-5">
                    <thead>
                        <tr>
                            <th style="background-color: crimson;">#</th>
                            <th>Serie</th>
                            <th>Orden de Compra</th>
                            <th>Guia despacho</th>
                            <th>Proveedor</th>
                            <th style="background-color: crimson;">Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        include('../crud/mostrarRegistros/mostrarSerie.php');
                        ?>
                    </tbody>
                </table>
            </div>
</body>
<script type="text/javascript">
    const borrar = () => {
        if (!confirm("¿Desea borrar este campo?")) {
            event.preventDefault();
        }
    };
</script>

<script>
    $(document).ready(function() {
        $("#serie").keypress(function(event) {
            event.preventDefault;
            if (event.which == 13) {
                if ($("#guia_despacho").val() == '') {
                    alert("Debe indicar guía de despacho")
                    return false;
                }
                if ($("#proveedor").val() == '') {
                    alert("Debe indicar el proveedor")
                    return false;
                }
                params = {
                    guia_despacho: $("#guia_despacho").val() || 0,
                    proveedor: $("#proveedor").val() || 0,
                    serie: $(this).val() || 0
                }
                if ($(this).val() != '') {
                    $.ajax({
                        type: 'GET',
                        url: "../crud/guardarRegistros/guardar_serie.php?guia_despacho=" + params.guia_despacho + "&serie=" + params.serie + "&proveedor=" + params.proveedor,
                        // data: JSON.stringify(params),
                        success: function(response) {
                            console.log(response)
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    });
                    $(this).val("");
                } else {
                    alert("Debe indicar un valor válido")
                }
                $(this).focus();
                return false;
            }
        })
    })
</script>

<!-- BUTTONS PDF HTML EXCEL  -->
<script src="../DataTables/Buttons-2.2.3/js/dataTables.buttons.min.js"></script>
<script src="../DataTables/JSZip-2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="../DataTables/Buttons-2.2.3/js/buttons.html5.min.js"></script>
<!-- DATA TABLE  -->
<script src="../DataTables/datatables.min.js"></script>
<script src="../DataTables/DataTables-1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="../js/dataTableSerie.js"></script>

</body>
<script type="text/javascript" charset="utf8" src="../DataTables/datatables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</html>