<?php 

    $resultado = [
        'error' => false,
        'mensaje' => ''
      ];
    try {
        $connect_sv = include '../../conexiones/sv_local_connect.php';
        $dsn = 'mysql:host=' . $connect_sv['db']['host'] . ';dbname=' . $connect_sv['db']['name'];
        $conexion = new PDO($dsn, $connect_sv['db']['user'], $connect_sv['db']['pass'], $connect_sv['db']['options']);
    
        $id = $_GET['id'];
        $updateSQL = "SELECT * FROM tipo_equipo  WHERE id_tipo_equipo = " . $id;
        $sentencia = $conexion->prepare($updateSQL);
        $sentencia->execute();
        $tipo_equipo = $sentencia->fetch(PDO::FETCH_ASSOC);
        
        if (!$tipo_equipo) {
          echo "Error";
          $resultado['error'] = true;
          $resultado['mensaje'] = 'No se ha encontrado el tipo_equipo';
        }
      
      } catch(PDOException $error) {
        $resultado['error'] = true;
        $resultado['mensaje'] = $error->getMessage();
      }
      include('../../pantallas/editar_tipo.php');


      if(isset($_POST['submit'])){
        try{

            $tipo = [
              "id_tipo_equipo"   => $_GET['id'],
              "nombre_tipo" => $_POST['tipo_equipo'],
            ];

            $updateSQL = "UPDATE tipo_equipo SET
              nombre_tipo = :nombre_tipo
              WHERE id_tipo_equipo = :id_tipo_equipo";

      $consulta = $conexion->prepare($updateSQL);

      if($consulta->execute($tipo)){
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
