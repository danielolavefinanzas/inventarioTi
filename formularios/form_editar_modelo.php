<form class="d-grid gap-2" method="post">

    <!-- CAMPO DEL ID  -->
    <h4 class="d-flex justify-content-start mt-2"><strong>Editar un modelo</strong></h4>

    <hr class="border  border-1 opacity-50">

    <div class="col ">

        <div class="form-group mb-4">
            <input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $modelo['nombre_modelo'] ?>" placeholder="Edite la serie del equipo">
        </div>
        <!-- BOTON  -->

        <span class="d-grid gap-2 d-md-flex">
            <button type="submit" class="btn btn-success d-flex align-items-center" name="submit" value="Guardar Cambios">
                Guardar Cambios <span class="material-symbols-outlined"> save</span>
            </button>
            <a class="btn btn-primary d-flex align-items-center float-sm-end" href="../../pantallas/ingresarModelo.php">
                Volver <span class="material-symbols-outlined">undo</span>
            </a>

            <a class="btn btn-primary d-flex align-items-center float-sm-end" href="../../pantallas/home.php">
                Ir al inicio <span class="material-symbols-outlined">undo</span>
            </a>
        </span>
    </div>
</form>