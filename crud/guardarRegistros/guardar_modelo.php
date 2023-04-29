<?php

    if (isset($_POST['guardar_modelo'])){
        
        try {
             // VARIABLES DEL FORMULARIO 
            $modelo = $_POST['modelo'];
            // $orden_compra = $_POST['orden_compra'];

            // CONEXION A BASE DE DATOS 
            include('../../conexiones/conexionRim.php');
                // INSERT A TABLA EQUIPO 
                $consulta = "INSERT INTO m_rim.modelos (nombre_modelo) 
                        VALUES ('$modelo')";
                
                if($conexion->connect_error){die("Error al conectar a la base de datos" .$conexion->connect_error );}

                    if ($resultado = mysqli_query($conexion, $consulta)) {
                        header('location: ../../pantallas/ingresarModelo.php');
                    }else{
                        echo  
                        "<script>
                            alert('No se pudo agregar el registro');
                            window.location= '../../pantallas/ingresarModelo.php'
                        </script>";
                    }
                       
                } catch (PDOException $e) {
                    echo $consulta . "<br>" . $e->getMessage();
                    $conexion = null;
                }

    header('location: ../../pantallas/ingresarModelo.php');
    exit();
    
}

?>

   