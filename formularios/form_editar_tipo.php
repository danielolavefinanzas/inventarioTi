<form class="d-grid gap-2" method="post">

    <!-- CAMPO DEL ID  -->
    <h4 class="d-flex justify-content-start mt-2"><strong>Editar un proveedor</strong></h4>

    <hr class="border  border-1 opacity-50">

    <div class="col ">

        <div class="form-group mb-4">
            <input type="text" class="form-control" id="tipo_equipo" name="tipo_equipo" value="<?php echo $tipo_equipo['nombre_tipo'] ?>" placeholder="Edite la serie del equipo">
        </div>
        <!-- BOTON  -->
        <span class="d-grid gap-2 d-md-flex">
            <a class="btn btn-primary d-flex align-items-center float-sm-end" href="../../pantallas/ingresarTipo.php">
                Volver <span class="material-symbols-outlined">undo</span>
            </a>

            <a class="btn btn-primary d-flex align-items-center float-sm-end" href="../../pantallas/home.php">
                Ir al inicio <span class="material-symbols-outlined">undo</span>
            </a>
            <button type="submit" class="btn btn-success d-flex align-items-center" name="submit" value="Guardar Cambios">
                Guardar Cambios <span class="material-symbols-outlined"> save</span>
            </button>
        </span>
    </div>
</form>