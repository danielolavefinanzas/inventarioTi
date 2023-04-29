<form class="d-grid gap-2" action="../crud/guardarRegistros/guardar_orden.php" method="post">
    <!-- CAMPO DEL ID  -->
    <h4 class="d-flex justify-content-start mt-2"><strong>Asignar una orden a una guia</strong></h4>
    <hr class="border  border-1 opacity-50">

    
    <div class="form-group mb-4">
        <label for="guia_despacho" class="form-label"><strong>Guia de despacho</strong></label>
        <!-- <input id="guia_despacho" list="guia_despacho" name="guia_despacho" rows="2" placeholder="Ingrese la guia de despacho" class="form-control"></input> -->
        <?php
        include('options/guiaOption.php');
        ?>
    </div>
    <div class="form-group mb-4">
        <label for="guia_despacho" class="form-label"><strong>Proveedor</strong></label>
        <!-- <input id="guia_despacho" list="guia_despacho" name="guia_despacho" rows="2" placeholder="Ingrese la guia de despacho" class="form-control"></input> -->
        <?php
        include('options/proveedorOption.php');
        ?>
    </div>


    <div class="form-group mb-4">
        <label for="serie" class="control-label"><strong>Orden de compra</strong></label>
        <input type="text" class="form-control" id="orden_compra" name="orden_compra" placeholder="Ingrese la orden de compra" required >
    </div>
    <!-- BOTON  -->
    <span class="d-grid gap-2 d-md-flex">
        <button type="submit" id="btn_serie" class="btn btn-success d-flex align-items-center" name="oc_serie_btn" value="Guardar Cambios">
            Guardar <span class="material-symbols-outlined"> save</span>
        </button>
    </span>
</form>