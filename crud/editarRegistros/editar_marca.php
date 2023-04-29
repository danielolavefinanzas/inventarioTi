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
        $updateSQL = "SELECT * FROM marcas  WHERE id_marca = " . $id;
        $sentencia = $conexion->prepare($updateSQL);
        $sentencia->execute();
        $marca = $sentencia->fetch(PDO::FETCH_ASSOC);
        
        if (!$marca) {
          echo "Error";
          $resultado['error'] = true;
          $resultado['mensaje'] = 'No se ha encontrado la marca';
        }
      
      } catch(PDOException $error) {
        $resultado['error'] = true;
        $resultado['mensaje'] = $error->getMessage();
      }
      include('../../pantallas/editar_marca.php');


      if(isset($_POST['submit'])){
        try{

            $marca = [
              "id_marca"   => $_GET['id'],
              "nombre_marca" => $_POST['marca'],
            ];

            $updateSQL = "UPDATE marcas SET
              nombre_marca = :nombre_marca
              WHERE id_marca = :id_marca";

      $consulta = $conexion->prepare($updateSQL);

      if($consulta->execute($marca)){
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
