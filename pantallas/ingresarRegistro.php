<?php include('../cerrarSesion/destruirSesion.php'); ?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Sistema de inventario</title>

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- GOOGLE ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- CDN DataTable CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <!-- FONTS AWESOME  -->
    <script src="https://kit.fontawesome.com/d59f14aa6e.js" crossorigin="anonymous"></script>
    <!-- JQUERY   -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <!-- CDN SELECCIONAR DATA TABLES  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>
    <!-- BUTTONS PDF HTML EXCEL  -->
    <script src="../DataTables/Buttons-2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="../DataTables/JSZip-2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="../DataTables/Buttons-2.2.3/js/buttons.html5.min.js"></script>
    <!-- DATA TABLE  -->
    <script src="../DataTables/DataTables-1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="../js/dataTable.js"></script>
    <script type="text/javascript" charset="utf8" src="../DataTables/datatables.js"></script>
    <!-- ESTILOS CSS  -->
    <link rel="stylesheet" href="../css/styleNavHome.css">
    <link rel="stylesheet" href="../css/styleTabla.css">
</head>

<body>
    <div>
        <?php
        include('../templates/nav/navHome.php');
        ?>
    </div>
    <!-- CONTENEDOR  NUEVO REGISTRO-->
    <div class="container-sm  mt-5">

        <div class="row">
            <div style="background-color: #fcfcfc;" class="card card-body ">
                <!-- FORMULARIO DE REGISTRO  -->
                <?php include('../formularios/formRegistro.php') ?>
            </div>
        </div>
    </div>
    <!-- COLUMNA TABLA  -->
    <div class="container col-md-12 mt-5  ">
        <?php
        include('../includes/contadorFilas.php');
        ?>
    </div>
    <div class="container col-md-8 mt-5 mb-5 border " style="border: 1px solid black; border-radius:5px; background-color: #fcfcfc;">
        <h4 class="text-center mt-3 h4"><strong>Filtrar</strong> </h4>
        <table class="table  table-responsive" id="search">

            <td id="search4"><strong>Tipo</strong></td>
            <td id="search5"><strong>Unidad</strong></td>
            <td id="search6"><strong>Recinto</strong></td>
            <td id="search7"><strong>Marca</strong></td>
            <td id="search8"><strong>Modelo</strong></td>
        </table>
    </div>
    <div class="container col-md-12 mt-5  ">

        <table id="dataTable" class="table  table-responsive mt-5">
            <thead>
                <tr>
                    <th style="background-color: crimson;">#</th>
                    <th>Serie Equipo</th>
                    <th>Orden Compra</th>
                    <th>Guia Despacho</th>
                    <th style="background-color: crimson;">Proveedor</th>
                    <th>Tipo</th>
                    <th>Unidad</th>
                    <th>Recinto</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Fecha registro</th>
                    <th>Recepciona</th>
                    <th>Entrega</th>
                    <th style="background-color: crimson;">Opciones</th>
                </tr>
            </thead>
            <tbody class="display">
                <?php include('../crud/mostrarRegistros/mostrarRegistro.php'); ?>
            </tbody>
        </table>
    </div>
</body>
<script>
    // $(document).ready(function() {
    //     $("#series").change(function() {
    //         $("#series option:selected").each(function() {
    //             id_guia_despacho = $('#series option:selected').data('id_guia');
    //             $.post("../formularios/options/guiaDisabledOption.php", {
    //                 id_guia_despacho: id_guia_despacho
    //             }, function(data) {
    //                 $("#id_guia_despacho").html(data);
    //             });
    //         });
    //     })
    // });

    $(document).ready(function() {
        $("#series").change(function() {
            $("#series option:selected").each(function() {
                id_guia_despacho = $('#series option:selected').data('id_guia');
                $("#id_guia").val($('#series option:selected').data('id_guia'));
                
                console.log(id_guia_despacho);
                $("#selectOptions").html("")
                $.ajax({
                        url: "../formularios/options/guiaDisabledOption.php?id_guia_despacho=" + id_guia_despacho,
                        type: "GET",
                        success: function(response) {
                            console.log(response)
                            $("#selectOptions").append(response)
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    }),
                    function(data) {
                        $("#id_guia_despacho").html(data);
                    };
                });
        })
    });
    $('#save_task').click(function(event) {
        console.log("Click guardar");
        event.preventDefault;
        // params = {
        //     serie: $("#series").val() || 0,
        //     id_guia_despacho: $("#series option:selected").data("id_guia") || 0,
        //     tipo: $("#tipo_equipo").val() || 0,
        //     marca: $("#marcas").val() || 0,
        //     modelo: $("#modelos").val() || 0,
        //     unidad: $("#recintos").val() || 0, 
        //     recinto: $("#servicios").val() || 0,
        //     recepciona: $("#recepciona").val() || 0,
        //     entrega: $('#entrega').val() || 0
        // }
        // var uri = "../crud/guardarRegistros/guardar_registro.php?serie_equipo=" + params.serie + "&tipo_equipo=" + params.tipo + "&marca=" + params.marca + "&modelo=" + params.modelo + "&recinto=" + params.unidad + "&servicio=" + params.recinto + "&recepciona=" + params.recepciona + "&entrega=" + params.entrega + "&id_guia=" + params.id_guia_despacho
        
        // if (this.value) {
            // $.ajax({
            //     url: uri,
            //     type: "GET",
            //     // data: JSON.stringify(params),
            //     success: function(response) {
            //         console.log(response)
            //     },
            //     error: function(data) {
            //         console.log(data);
            //     }
            // })
        // }
        params ={
            sserie_equipoerie: $("#series").val() || 0,
            id_guia_despacho: $("#series option:selected").data("id_guia") || 0,
            tipo_equipo: $("#tipo_equipo").val() || 0,
            marca: $("#marcas").val() || 0,
            modelo: $("#modelos").val() || 0,
            unidad: $("#recintos").val() || 0, 
            recinto: $("#servicios").val() || 0,
            recepciona: $("#recepciona").val() || 0,
            entrega: $('#entrega').val() || 0
        }
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../crud/guardarRegistros/guardar_registro.php");

        xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            console.log(xhr.responseText);
        }};

        xhr.send(JSON.stringify(params));
    })
</script>

</html>