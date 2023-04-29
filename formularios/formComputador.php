<form class="d-grid gap-2" action="save_task.php" method="POST" enctype="multipart/form-data">
    <!-- REGISTRO DE SERIE  -->
    <h4 class="d-flex justify-content-start mt-2"><strong>Ingresar un nuevo registro</strong></h4>
    <hr class="border  border-1 opacity-50">
    <div class="form-group mb-4">
        <label for="serie_equipo" class="form-label"><strong>Serie de equipo</strong></label>
        <input id="serie_equipo" type="text" name="serie_equipo" class="form-control" placeholder="Ingrese la serie del equipo" autofocus required>
    </div>
    <div class="form-group mb-4">
        <label for="serie_equipo" class="form-label"><strong>Serie de equipo</strong></label>
        <input id="serie_equipo" type="text" name="serie_equipo" class="form-control" placeholder="Ingrese la serie del equipo" autofocus required>
    </div>
    <div class="form-group mb-4">
        <label for="serie_equipo" class="form-label"><strong>Serie de equipo</strong></label>
        <input id="serie_equipo" type="text" name="serie_equipo" class="form-control" placeholder="Ingrese la serie del equipo" autofocus required>
    </div>
    <div class="form-group mb-4">
        <label for="serie_equipo" class="form-label"><strong>Serie de equipo</strong></label>
        <input id="serie_equipo" type="text" name="serie_equipo" class="form-control" placeholder="Ingrese la serie del equipo" autofocus required>
    </div>
    <!-- REGISTRO DE RECINTO  -->
    <div class="form-group mb-4">
        <label for="ubicacion" list="ubicaciones" class="form-label"><strong>Recinto</strong></label><br>
        <?php include('./options/recintosOptionForHome.php'); ?>
    </div>
    <!-- REGISTRO DE EQUIPO  -->
    <div class="form-group mb-4">
        <label for="tipo_equipo" class="form-label"><strong>Tipo de equipo</strong></label>
        <input id="tipo_equipo" list="ubicaciones" type="text" name="tipo_equipo" class="form-control" placeholder="Ingrese el tipo de equipo" required>
    </div>

    <!-- BOTON DE REGISTRO  -->
    <span style="display: flex; justify-content: center">
        <button type="submit" class="btn btn-primary d-flex align-items-center" name="save_task" value="Guardar registros">
            Guardar <span class="material-symbols-outlined"> save</span>
        </button>
    </span>

</form>