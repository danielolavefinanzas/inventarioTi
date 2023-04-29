<?php

    if (isset($_POST['guardar_tipo_equipo'])){
        
        try {
             // VARIABLES DEL FORMULARIO 
            $tipo_equipo = $_POST['tipo_equipo'];
            // $orden_compra = $_POST['orden_compra'];

            // CONEXION A BASE DE DATOS 
            include('../../conexiones/conexionRim.php');
                // INSERT A TABLA EQUIPO 
                $consulta = "INSERT INTO m_rim.tipo_equipo (nombre_tipo) 
                        VALUES ('$tipo_equipo')";
                
                if($conexion->connect_error){die("Error al conectar a la base de datos" .$conexion->connect_error );}

                $resultado = mysqli_query($conexion, $consulta);
                try {
                    if ($resultado) {
                        header('location: ../../pantallas/ingresarTipo.php');
                    exit;
                    }
                } catch (\Throwable $th) {
                        echo  
                        "<script>
                            alert('No se pudo agregar el registro');
                            window.location= '../../pantallas/ingresarTipo.php'
                        </script>";
                    }
                } catch (PDOException $e) {
                    echo $consulta . "<br>" . $e->getMessage();
                    $conexion = null;
                }

    header('location: ../../pantallas/ingresarTipo.php');
    exit();
    
}
