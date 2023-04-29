<form method="post" class="d-grid gap-2 form-group  ">

    <h4 class="d-flex justify-content-start mt-2"><strong>Filtrar busqueda</strong></h4>
    <hr class="border  border-1 opacity-50">

    <!-- FITLTRADO DE SERIE  -->
    <div class="row">

        <div class="mb-4 col-auto">
            <label for="serie_equipo" class="form-label"><strong>Serie de equipo</strong></label>
            <input id="serie_equipo" type="text" name="serie_equipo" class="form-control" placeholder="Ingrese la serie del equipo">
        </div>
        <!-- FITLTRADO DE orden compra  -->
        <div class="mb-4 col-auto">
            <label for="orden_compra" class="form-label"><strong>Orden de Compra</strong></label>
            <input id="orden_compra" list="ordenes" name="orden_compra" rows="2" placeholder="Ingrese la orden de compra" class="form-control"></input>
            <?php
            include('./options/ocOptionForHome.php');
            ?>
        </div>
        <div class="col-auto">
            <button type="submit" name="filtrar_busqueda_oc" class="btn btn-primary " value="Filtrar busqueda">Filtrar busqueda <span class="material-symbols-outlined" style="vertical-align: middle"> search </span></button>
        </div>
    </div>
    <!-- BOTON DE FILTRAR  -->

</form>