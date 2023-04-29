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
        $updateSQL = "SELECT * FROM modelos  WHERE id_modelo = " . $id;
        $sentencia = $conexion->prepare($updateSQL);
        $sentencia->execute();
        $modelo = $sentencia->fetch(PDO::FETCH_ASSOC);
        if (!$modelo) {
          echo "Error";
          $resultado['error'] = true;
          $resultado['mensaje'] = 'No se ha encontrado el modelo';
        }
      
      } catch(PDOException $error) {
        $resultado['error'] = true;
        $resultado['mensaje'] = $error->getMessage();
      }
      include('../../pantallas/editar_modelo.php');


      if(isset($_POST['submit'])){
        try{

            $modelo = [
              "id_modelo"   => $_GET['id'],
              "nombre_modelo" => $_POST['modelo'],
            ];

            $updateSQL = "UPDATE modelos SET
              nombre_modelo = :nombre_modelo
              WHERE id_modelo = :id_modelo";

      $consulta = $conexion->prepare($updateSQL);

      if($consulta->execute($modelo)){
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
