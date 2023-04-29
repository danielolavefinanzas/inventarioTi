<form class="mt-5" method="POST" action="/inventarioti/crud/guardarRegistros/guardar_tipo.php">

    <h4 class="d-flex justify-content-start mt-2"><strong>Ingresar un tipo de equipo</strong></h4>

    <hr class="border  border-1 opacity-50">

    <div class="col ">
        <div class="form-group mb-4">
            <input id="tipo_equipo" type="text" name="tipo_equipo" class="form-control" placeholder="Ingrese el tipo de equipo" autofocus required>
        </div>
        <a class="btn btn-primary" href="../pantallas/home.php">Volver al Inicio</a>
        <button class="btn btn-success" type="submit" name="guardar_tipo_equipo" value="Guardar Tipo">Guardar </button>
    </div>

</form>