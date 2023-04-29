<!doctype html>
<html>

<head>
  <title>Modificación de registro.</title>
</head>

<body>

  <?php
  include('../../conexiones/conexionRim.php');
  // $id = $_REQUEST['id'];
  // var_dump($equipo->id);

  mysqli_query($conexion, "UPDATE equipo SET
                            id_marca=$_REQUEST[marca],
                            id_modelo=$_REQUEST[modelo],
                            id_tipo_equipo =$_REQUEST[tipo_equipo],
                            id_recinto=$_REQUEST[recinto],
                            id_servicio=$_REQUEST[servicio],
                            recepciona='$_REQUEST[recepciona]',
                            entrega='$_REQUEST[entrega]'
                            where id=$_REQUEST[id]") or
    die(mysqli_error($conexion));

  if ($conexion) {
    header('location: ../../pantallas/home.php');
    echo '
        <button type="button" class="btn btn-primary"   >
        Launch static backdrop modal
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Understood</button>
            </div>
          </div>
        </div>
      </div>
      
        ';
    mysqli_close($conexion);
  } else {
    echo 'No se modificó los datos del registro';
  }

  ?>
</body>

</html>