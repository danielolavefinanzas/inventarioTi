<?php 

    $resultado = [
        'error' => false,
        'mensaje' => ''
      ];
    try {
        $connect_sv = include 'conexiones/sv_local_connect.php';
        $dsn = 'mysql:host=' . $connect_sv['db']['host'] . ';dbname=' . $connect_sv['db']['name'];
        $conexion = new PDO($dsn, $connect_sv['db']['user'], $connect_sv['db']['pass'], $connect_sv['db']['options']);
    
        $id = $_GET['id'];
        $updateSQL = "SELECT * FROM serie_equipo  WHERE id_serie_equipo = " . $id;
        $sentencia = $conexion->prepare($updateSQL);
        $sentencia->execute();
        $equipo = $sentencia->fetch(PDO::FETCH_ASSOC);
        
        if (!$equipo) {
          echo "Error";
          $resultado['error'] = true;
          $resultado['mensaje'] = 'No se ha encontrado el equipo';
        }
      
      } catch(PDOException $error) {
        $resultado['error'] = true;
        $resultado['mensaje'] = $error->getMessage();
      }
      include('header/headerEdit.php');
      if(isset($_POST['submit'])){
        try{
            
            $connect_sv = include 'conexiones/sv_local_connect.php';
            $dsn = 'mysql:host=' . $connect_sv['db']['host'] . ';dbname=' . $connect_sv['db']['name'];
            $conexion = new PDO($dsn, $connect_sv['db']['user'], $connect_sv['db']['pass'], $connect_sv['db']['options']);


            $orden_serie = [
              "id_serie_equipo"   => $_GET['id'],
              "serie_equipo" => $_POST['serie_equipo'],
              "orden_compra" => $_POST['orden_compra']
            ];

            $updateSQL = "UPDATE orden_serie SET
              serie_equipo = :serie_equipo,
              orden_compra = :orden_compra
              WHERE id_serie_equipo = :id_serie_equipo";
      $consulta = $conexion->prepare($updateSQL);
      // $consulta->execute($equipo);
      if($consulta->execute($equipo)){
        echo '<div class=" container alert alert-success d-flex alert-dismissible fade show align-items-center" role="alert">
                    Cambios guardados exitosamente.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
      }            
        }catch(PDOException $error){
                echo '<div class=" container alert alert-danger d-flex alert-dismissible fade show align-items-center" role="alert">
                    <strong>Ha ocurrido un error inesperado. </strong> Verifique los campos y vuelva a intentarlo.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
        }
    }
?>
