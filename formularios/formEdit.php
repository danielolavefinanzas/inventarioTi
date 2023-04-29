<form class="d-grid gap-2" method="post">
    <!-- CAMPO DEL ID  -->
    <h4 class="d-flex justify-content-start mt-2"><strong>Editar un registro</strong></h4>

    <div class="form-group mb-4">
        <label for="id_equipo" class="control-label"><strong>#</strong></label>
        <input type="text" class="form-control" id="id_equipo" name="id_equipo" value="<?php echo $_GET['id'] ?>" disabled="true">
    </div>
    <!-- CAMPO DE SERIE  -->
    <div class="form-group mb-4">
        <label for="serie_equipo" class="control-label"><strong>Serie de Equipo</strong></label>
        <input type="text" class="form-control" id="serie_equipo" name="serie_equipo" value="<?php echo $equipo['id_serie_equipo'] ?>" placeholder="Edite la serie del equipo">
    </div>
    <!-- CAMPO DE RECINTO  -->
    <div class="form-group mb-4">
        <label for="marca" class="control-label"><strong>Marca</strong></label>
        <!-- <input type="text" class="form-control" id="marca" name="marca"  value="<?php echo $equipo['id_recinto'] ?>" placeholder="Edite el recinto"> -->
        <?php include('./options/marcaOption.php'); ?>
    </div>
    <div class="form-group mb-4">
        <label for="modelo" class="control-label"><strong>Modelo</strong></label>
        <!-- <input type="text" class="form-control" id="modelo" name="modelo"  value="<?php echo $equipo['id_recinto'] ?>" placeholder="Edite el recinto"> -->
        <?php include('./options/modeloOption.php'); ?>
    </div>
    <div class="form-group mb-4">
        <label for="tipo_equipo" class="control-label"><strong>Tipo de equipo</strong></label>
        <!-- <input type="text" class="form-control" id="tipo_equipo" name="tipo_equipo"  value="<?php echo $equipo['id_recinto'] ?>" placeholder="Edite el recinto"> -->
        <?php include('./options/tipoEquipoOption.php'); ?>
    </div>
    <div class="form-group mb-4">
        <label for="recinto" class="control-label"><strong>Recinto</strong></label>
        <!-- <input type="text" class="form-control" id="recinto" name="recinto"  value="<?php echo $equipo['id_recinto'] ?>" placeholder="Edite el recinto"> -->
        <?php include('./options/recintoOption.php'); ?>
    </div>
    <div class="form-group mb-4">
        <label for="servicio" class="control-label"><strong>Servicio</strong></label>
        <!-- <input type="text" class="form-control" id="servicio" name="servicio"  value="<?php echo $equipo['id_servicio'] ?>" placeholder="Edite el servicio"> -->
        <?php include('./options/servicioOption.php'); ?>
    </div>
    <!-- CAMPO DE TIPO DEL EQUIPO  -->
    <div class="form-group mb-4">
        <label for="tipo_equipo" class="control-label"><strong>Recepciona</strong></label>
        <input type="text" class="form-control" id="tipo_equipo" name="tipo_equipo" value="<?php echo $equipo['recepciona'] ?>" placeholder="Edite el tipo del producto">
    </div>
    <div class="form-group mb-4">
        <label for="tipo_equipo" class="control-label"><strong>Entrega</strong></label>
        <input type="text" class="form-control" id="tipo_equipo" name="tipo_equipo" value="<?php echo $equipo['entrega'] ?>" placeholder="Edite el tipo del producto">
    </div>

    <!-- BOTON  -->
    <span class="d-grid gap-2 d-md-flex">
        <button type="submit" class="btn btn-primary d-flex align-items-center" name="submit" value="Guardar Cambios">
            Guardar Cambios <span class="material-symbols-outlined"> save</span>
        </button>
        <a class="btn btn-primary d-flex align-items-center float-sm-end" href="../inventarioti/home.php">
            Regresar al inicio <span class="material-symbols-outlined">undo</span>

        </a>
    </span>
</form>