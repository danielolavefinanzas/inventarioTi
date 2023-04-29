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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- CDN DataTable CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../css/styleTabla.css">
    <!-- CDN DataTable JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- <script src="//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"></script> -->
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
</head>

<body>
    <!-- Navegación  -->
    <?php include('../templates/nav/navHome.php'); ?>

    <div class="container mt-5">
        <div class="row">

            <div class="col-md-6">
                <div class="card card-body">
                    <?php include('../formularios/formFiltro.php');
                    ?>
                </div>
            </div>
            <!-- <div class="col-sm-6"> -->
            <!-- <div class="card card-body"> -->
            <?php
            // include('../formularios/formExport.php');
            ?>
        </div>
    </div>
    </div>
    <div class=" col-md-12 mt-5  ">
        <table id="dataTable" class="display">
            <thead>
                <?php
                // include('../inventarioTi/includes/contadorFilas.php');
                ?>
                <tr>
                    <th>Serie Equipo</th>
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
            <tbody class="display">
                <?php include('../crud/mostrarRegistros/mostrarFiltro.php'); ?>
            </tbody>
        </table>
    </div>
    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            language: {
                url: 'dataTables.es-ES.json'
            }
        });
    });

    function actionForm(formid, act) {
        document.getElementById(formid).action = act;
        document.getElementById(formid).submit();
    }
</script>
</script>