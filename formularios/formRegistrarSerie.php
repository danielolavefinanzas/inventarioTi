<form id="frm_registro_oc" class="d-grid gap-2" action="../crud/guardarRegistros/guardar_serie.php" method="post">
    <!-- CAMPO DEL ID  -->
    <h4 class="d-flex justify-content-start mt-2"><strong>Registrar una serie</strong></h4>
    <hr class="border  border-1 opacity-50">

    <div class="form-group mb-4">
        <label for="proveedor" class="form-label"><strong>Proveedor</strong></label>
        <!-- <input id="guia_despacho" list="guia_despacho" name="guia_despacho" rows="2" placeholder="Ingrese la guia de despacho" class="form-control"></input> -->
        <?php
        include('options/proveedorOption.php');
        ?>
    </div>
    <div class="form-group mb-4">
        <label for="guia_despacho" class="control-label"><strong>Guia de despacho</strong></label>
        <input type="text" class="form-control" id="guia_despacho" name="guia_despacho" placeholder="Ingrese la guia de despacho">
    </div>

    <div class="form-group mb-4">
        <label for="serie" class="control-label"><strong>Serie de Equipo</strong></label>
        <input type="text" class="form-control" id="serie" name="serie" placeholder="Ingrese la serie del equipo" required autofocus>
    </div>
    <!-- BOTON  -->
    <!-- <span class="d-grid gap-2 d-md-flex"> 
            <button type="submit" id="btn_serie" class="btn btn-success d-flex align-items-center" name="oc_serie_btn" value="Guardar Cambios">
                Guardar <span class="material-symbols-outlined"> save</span>
            </button>
    </span>      -->
</form>