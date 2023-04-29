<?php

    if (isset($_POST['guardar_proveedor'])){
        
        try {
             // VARIABLES DEL FORMULARIO 
            $proveedor = $_POST['proveedor'];
            // $orden_compra = $_POST['orden_compra'];

            // CONEXION A BASE DE DATOS 
            include('../../conexiones/conexionRim.php');
                // INSERT A TABLA EQUIPO 
                $consulta = "INSERT INTO m_rim.proveedores (nombre_proveedor) 
                        VALUES ('$proveedor')";
                
                if($conexion->connect_error){die("Error al conectar a la base de datos" .$conexion->connect_error );}

                $resultado = mysqli_query($conexion, $consulta);
                try { 
                    if ($resultado) {
                        header('location: ../../pantallas/ingresarProveedor.php');
                    exit;
                    }
                } catch (\Throwable $th) {
                        echo  
                        "<script>
                            alert('No se pudo agregar el registro');
                            window.location= '../../pantallas/ingresarProveedor.php'
                        </script>";
                    }
                } catch (PDOException $e) {
                    echo $consulta . "<br>" . $e->getMessage();
                    $conexion = null;
                }

    header('location: ../../pantallas/ingresarProveedor.php');
    exit();
    
}
