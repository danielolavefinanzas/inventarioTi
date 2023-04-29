<?php 
    //   include('form_editar_registro.php');
    //   $connect_sv = include '../conexiones/sv_local_connect.php';
    // $resultado = [
    //     'error' => false,
    //     'mensaje' => ''
    //   ];
    // try {
    //     $dsn = 'mysql:host=' . $connect_sv['db']['host'] . ';dbname=' . $connect_sv['db']['name'];
    //     $conexion = new PDO($dsn, $connect_sv['db']['user'], $connect_sv['db']['pass'], $connect_sv['db']['options']);
    
    //     $id = $_GET['id'];
    //     // $updateSQL = "SELECT * FROM equipo  inner join recinto on recinto.id_recinto = equipo.id_recinto WHERE id_equipo = " . $id;
    //     $updateSQL = "SELECT * FROM equipo  WHERE id_equipo = " . $id;

    //     $sentencia = $conexion->prepare($updateSQL);
    //     $sentencia->execute();
    //     $equipo = $sentencia->fetch(PDO::FETCH_ASSOC);
        
    //     if (!$equipo) {
    //       echo "Error";
    //       $resultado['error'] = true;
    //       $resultado['mensaje'] = 'No se ha encontrado el equipo';
    //     }
      
    //   } catch(PDOException $error) {
    //     $resultado['error'] = true;
    //     $resultado['mensaje'] = $error->getMessage();
    //   }
      
    //   if(isset($_POST['submit'])){
       
    //     try{
          
    //       $dsn = 'mysql:host=' . $connect_sv['db']['host'] . ';dbname=' . $connect_sv['db']['name'];
    //       $conexion = new PDO($dsn, $connect_sv['db']['user'], $connect_sv['db']['pass'], $connect_sv['db']['options']);
    //         $equipo = [
    //           "id_equipo" => $_GET['id'],
    //           "id_serie_equipo" => $_POST['serie_equipo'],
    //           "id_tipo_equipo" => $_POST['tipo_equipo'],
    //           "id_marca" => $_POST['marca'],
    //           "id_modelo" => $_POST['modelo'],
    //           "id_recinto" => $_POST['recinto'],
    //           "id_servicio" => $_POST['servicio'],
    //           "recepciona" => $_POST['recepciona'],
    //           "entrega" => $_POST['entrega'],
    //         ];

    //         $updateSQL = "UPDATE equipo SET
    //           id_serie_equipo = :id_serie_equipo,
    //           id_tipo_equipo = :id_tipo_equipo,
    //           id_marca = :id_marca,
    //           id_modelo = :id_modelo,
    //           id_recinto = :id_recinto,
    //           id_servicio = :id_servicio,
    //           recepciona = :recepciona,
    //           entrega = :entrega,
    //           WHERE id_equipo = :id_equipo";
           
    //   $consulta = $conexion->prepare($updateSQL);
    //   $consulta->execute($equipo);
    //   // if($consulta->execute($equipo)){
    //   //   echo '<div class=" container alert alert-success d-flex alert-dismissible fade show align-items-center" role="alert">
    //   //               Cambios guardados exitosamente.
    //   //               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //   //             </div>';
    //   // }            
    //     }catch(PDOException $error){
    //             echo '<div class=" container alert alert-danger d-flex alert-dismissible fade show align-items-center" role="alert">
    //                 <strong>Ha ocurrido un error inesperado. </strong> Verifique los campos y vuelva a intentarlo.
    //                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //               </div>';
    //     }
    // }else {
    //   $equipo;
    // }

?>
