<form id="form" class="d-grid gap-2" action="../crud/guardarRegistros/guardar_registro.php" method="post">
    <input type = "hidden" name = "id_guia" id = "id_guia" value="0">
    <!-- REGISTRO DE SERIE  -->
    <div class="text-center ">
        <!-- <input type="hidden" name="id_guia", id="id_guia", value="0"> -->
        <div class="row mt-5">
            <div class="col-4" style="border-right:3px whitesmoke solid;">
                <div class=" mb-4">
                    <label for="serie_equipo" class="form-label"><strong>Serie equipo</strong></label><br>
                    <!-- <input id="serie_equipo" list="series" name="serie_equipo" placeholder="Ingrese la serie" value="" class="form-control"  required></input> -->
                    <?php
                    include('../formularios/options/serieOption.php');
                    ?>
                </div>
                <div class=" mb-4">
                    <!-- <label for="serie_equipo" class="form-label"><strong>Guia option</strong></label><br> -->
                    <div id="selectOptions"></div>
                </div>
                <div class=" mb-4">
                    <label for="tipo_equipo" list="tipo_equipo" class="form-label"><strong>Tipo de equipo</strong></label>
                    <?php
                    include('../formularios/options/tipoEquipoOption.php');
                    ?>
                </div>
                <div class=" mb-4">
                    <label for="marca" list="marcas" class="form-label"><strong>Marca</strong></label><br>
                    <?php
                    include('../formularios/options/marcaOption.php');
                    ?>
                </div>
                <div class=" mb-4">
                    <label for="modelo" list="modelos" class="form-label"><strong>Modelo</strong></label>
                    <?php
                    include('../formularios/options/modeloOption.php');
                    ?>
                </div>

            </div>
            <div class="col-4" style="border-right:3px whitesmoke solid;">
                <div class=" mb-4">
                    <label for="recinto" list="recintos" class="form-label"><strong>Unidad</strong></label><br>
                    <?php
                    include('../formularios/options/recintoOption.php');
                    ?>
                </div>
                <div class=" mb-4">
                    <label for="servicio" list="servicios" class="form-label"><strong>Recinto</strong></label><br>
                    <?php
                    include('../formularios/options/servicioOption.php');
                    ?>
                </div>
            </div>
            <div class="col-4">
                <div class=" mb-4">
                    <label for="recepciona" class="form-label"><strong>Recepciona</strong></label>
                    <input id="recepciona" type="text" name="recepciona" class="form-control" value="test" placeholder="Responsable de la recepcion" required>
                </div>
                <div class=" mb-4">
                    <label for="entrega" class="form-label"><strong>Entrega</strong></label>
                    <input id="entrega" type="text" name="entrega" class="form-control" value="test" placeholder="Responsable de la entrega" required>
                </div>
            </div>

        </div>
        <span style="display: flex; justify-content: center">
            <button type="submit" class="btn btn-success d-flex align-items-center" id="save_task" name="save_task" value="Guardar registros">
                Guardar <span class="material-symbols-outlined"> save </span>
            </button>
        </span>
    </div>
</form>