<form class="mt-5" method="POST" action="/inventarioti/crud/guardarRegistros/guardar_modelo.php">

    <h4 class="d-flex justify-content-start mt-2"><strong>Ingresar un modelo</strong></h4>

    <hr class="border  border-1 opacity-50">

    <div class="col ">
        <div class="form-group mb-4">
            <input id="modelo" type="text" name="modelo" class="form-control" placeholder="Ingrese el modelo" autofocus required>
        </div>
        <a class="btn btn-primary" href="../pantallas/home.php">Volver al Inicio</a>
        <button class="btn btn-success" type="submit" name="guardar_modelo" value="Guardar modelo">Guardar </button>
    </div>

</form>