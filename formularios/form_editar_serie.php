<?php
include('../conexiones/conexionRim.php');
var_dump($_REQUEST['id']);
$resultado = mysqli_query($conexion, "SELECT * FROM orden_serie where id_orden_serie = $_REQUEST[id]") or
    die(mysqli_error($conexion));

if ($res = mysqli_fetch_array($resultado)) {
    var_dump($res['id_orden_serie']);
?>
    <form class="d-grid gap-2" method="post" action="/../inventarioti/crud/editarRegistros/editar_serie.php">
        <!-- CAMPO DEL ID  -->

        <span class="row justify-content-between">
            <div class="col-4">
                <h4 class="d-flex justify-content-start mt-2"><strong>Editar una serie</strong></h4>
            </div>
            <div class="col-4">
                <div class="col-sm-3">
                    <input class="form-control text-center" name="ide" value="<?php echo $_REQUEST['id']; ?>" disabled style="background: crimson;border:none; border-radius:1px; color: white; font-size:15px; font-weight: bold;">
                </div>
            </div>
        </span>

        <hr class="border  border-1 opacity-50">

        <div class="col-sm ">

            <div class="form-group mb-4">

                <label for="serie_equipo" class="control-label container text-center"><strong>Serie de Equipo</strong></label>
                <!-- <input type="text" list="series" class="form-control" id="serie_equipo" name="serie_equipo" value=" " placeholder="Edite la serie del equipo" disabled> -->

                <select style="background:rgba(10, 139, 255, 0.5); font-size:1.4em; letter-spacing: 5px;" class="container text-center form-control" name="tipo_equipo" id="" disabled>
                    <?php
                    $resultadoSerie = mysqli_query($conexion, "SELECT id_orden_serie, serie_equipo FROM m_rim.orden_serie;") or
                        die(mysqli_error($conexion));
                    while ($orden_serie = mysqli_fetch_array($resultadoSerie)) {
                        if ($orden_serie['id_orden_serie'] == $res['id_orden_serie'])
                            echo "<option value=\"" . $orden_serie['id_orden_serie'] . "\" selected>" . $orden_serie['serie_equipo'] . "</option>";
                        else
                            echo "<option value=\"" . $orden_serie['id_orden_serie'] . "\">" . $orden_serie['serie_equipo'] . "</option>";
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="row">

            <div class="col-3 col-sm">

                <div class="form-group mb-4">
                    <label for="orden_compra" class="control-label"><strong>Orden de compra</strong></label>
                    <input type="text" class="form-control" id="orden_compra" name="orden_compra" value="<?php echo $res['orden_compra'] ?>" placeholder="Edite el tipo del producto">
                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-3 col-sm">

                <div class="form-group mb-4">
                    <label for="guia_despacho" class="control-label"><strong>Guia despacho</strong></label>
                    <input type="text" class="form-control" id="guia_despacho" name="guia_despacho" value="<?php echo $res['guia_despacho'] ?>" placeholder="Edite el tipo del producto">
                </div>

            </div>

        </div>

        <!-- BOTON  -->
        <div class="col mt-5">
            <span class="d-grid gap-2 d-md-flex">
                <a class="btn btn-primary d-flex align-items-center float-sm-end" href="../pantallas/ingresarSerie.php">
                    Volver <span class="material-symbols-outlined">undo</span>
                </a>

                <button type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-success d-flex align-items-center" name="submit_Serie" id="guardar_editar" value="Guardar Cambios">
                    Guardar <span class="material-symbols-outlined"> save</span>
                </button>
            </span>
        </div>


    </form>
<?php
} else
    echo 'No existe Serie con ese id';
?>