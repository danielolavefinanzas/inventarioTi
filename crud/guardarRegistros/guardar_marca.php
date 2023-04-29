<?php

    if (isset($_POST['guardar_marca'])){
        
        try {
             // VARIABLES DEL FORMULARIO 
            $marca = $_POST['marca'];
            // $orden_compra = $_POST['orden_compra'];

            // CONEXION A BASE DE DATOS 
            include('../../conexiones/conexionRim.php');
                // INSERT A TABLA EQUIPO 
                $consulta = "INSERT INTO m_rim.marcas (nombre_marca) 
                        VALUES ('$marca')";
                
                if($conexion->connect_error){die("Error al conectar a la base de datos" .$conexion->connect_error );}

                $resultado = mysqli_query($conexion, $consulta);
                try {
                    if ($resultado) {
                        header('location: ../../pantallas/ingresarMarca.php');
                    exit;
                    }
                } catch (\Throwable $th) {
                        echo  
                        "<script>
                            alert('No se pudo agregar el registro');
                            window.location= '../../pantallas/ingresarMarca.php'
                        </script>";
                    }
                } catch (PDOException $e) {
                    echo $consulta . "<br>" . $e->getMessage();
                    $conexion = null;
                }

    header('location: ../../pantallas/ingresarMarca.php');
    exit();
    
}

?>

   