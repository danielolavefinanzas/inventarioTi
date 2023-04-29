<form class="mt-5" method="POST" action="/inventarioti/crud/guardarRegistros/guardar_proveedor.php">
    <h4 class="d-flex justify-content-start mt-2"><strong>Ingresar un proveedor</strong></h4>

    <hr class="border  border-1 opacity-50">

    <div class="col ">
        <div class="form-group mb-4">
            <input id="proveedor" type="text" name="proveedor" class="form-control" placeholder="Ingrese el proveedor" autofocus required>
        </div>
        <a class="btn btn-primary" href="../pantallas/home.php">Volver al Inicio</a>
        <button class="btn btn-success" type="submit" name="guardar_proveedor" value="Guardar proveedor">Guardar </button>
    </div>

</form>