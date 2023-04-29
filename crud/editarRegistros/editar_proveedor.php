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
        $updateSQL = "SELECT * FROM proveedores  WHERE id_proveedor = " . $id;
        $sentencia = $conexion->prepare($updateSQL);
        $sentencia->execute();
        $proveedor = $sentencia->fetch(PDO::FETCH_ASSOC);
        
        if (!$proveedor) {
          echo "Error";
          $resultado['error'] = true;
          $resultado['mensaje'] = 'No se ha encontrado el proveedor';
        }
      
      } catch(PDOException $error) {
        $resultado['error'] = true;
        $resultado['mensaje'] = $error->getMessage();
      }
      // include('../editarRegistros/pantallas/editar_proveedor.php');
      include('../../pantallas/editar_proveedor.php');



      if(isset($_POST['submit'])){
        try{

            $proveedor = [
              "id_proveedor"   => $_GET['id'],
              "nombre_proveedor" => $_POST['proveedor'],
            ];

            $updateSQL = "UPDATE proveedores SET
              nombre_proveedor = :nombre_proveedor
              WHERE id_proveedor = :id_proveedor";

      $consulta = $conexion->prepare($updateSQL);

      if($consulta->execute($proveedor)){
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
