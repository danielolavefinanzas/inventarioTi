<form method="POST" action="./includes/reporteExcel.php" class="d-grid gap-2 form-group  " enctype="multipart/form-data">

    <h4 class="d-flex justify-content-start mt-2"><strong>Exportar tabla a excel</strong></h4>
    <hr class="border  border-1 opacity-50">
    <div class="mb-4">
        <label for="serie_equipo" class="form-label"><strong>Serie de equipo</strong></label>
        <input id="serie_equipo" type="text" name="serie_equipo" class="form-control" placeholder="Ingrese la serie del equipo" autofocus>
    </div>
    <div class="mb-4">
        <label for="ubicacion" class="form-label"><strong>Recinto</strong></label><br>
        <?php
        include('./options/recintosOptionForHome.php');
        ?>
    </div>
    <div class="mb-4">
        <label for="tipo_equipo" class="form-label"><strong>Tipo de equipo</strong></label>
        <input id="tipo_equipo" type="text" name="tipo_equipo" class="form-control" placeholder="Ingrese el tipo de equipo">
    </div>
    <!-- <div class="mb-4">
        <label for="orden_compra" class="form-label"><strong>Orden de Compra</strong></label>
        <input id="orden_compra" list="ordenes" name="orden_compra" rows="2" placeholder="Ingrese la orden de compra" class="form-control"></input>
        <?php
        // include('./options/ocOptionForHome.php'); 
        ?>
    </div> -->
    <span style="display: flex; justify-content: center">
        <button type="submit" id="exportar_excel" name="exportar_excel" class="btn bg-success btn-success" value="exportar_excel">
            Exportar<span class="material-symbols-outlined" style="vertical-align: middle"> download </span>
        </button>
    </span>
</form>