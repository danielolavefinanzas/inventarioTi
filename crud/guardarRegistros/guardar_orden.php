<?php

if (isset($_POST['oc_serie_btn'])) {

    try {
        // VARIABLES DEL FORMULARIO 
        $proveedor = $_POST['proveedor'];
        $guia_despacho = $_POST['guia_despacho'];
        $orden_compra = $_POST['orden_compra'];
        $data = file_get_contents("php://input");

        if (!$guia_despacho and !$orden_compra and !$proveedor) {
            echo "debe indicar parámetros necesarios";
            return false;
        }

        // CONEXION A BASE DE DATOS 
        include('../../conexiones/conexionRim.php');

        $consulta0 = "  SELECT
                        id_proveedor, 
                        orden_compra 
                        FROM oc_gd 
                        
                        left join orden_compra oc on oc.id_orden_compra = oc_gd.id_orden_compra
                        where orden_compra = '$orden_compra' and id_proveedor = " .$proveedor.";";

        $resultado0 = mysqli_query($conexion, $consulta0);

        if ($resultado0) {
            if (mysqli_num_rows($resultado0) < 1) {
                $consulta1 = "INSERT INTO orden_compra (orden_compra, id_proveedor) 
                VALUES (trim('$orden_compra'), $proveedor);";

                if ($conexion->connect_error) {
                    die("Error al conectar a la base de datos" . $conexion->connect_error);
                }

                $resultado1 = mysqli_query($conexion, $consulta1);

                if ($resultado1) {

                    $consulta2 = "SELECT id_orden_compra FROM orden_compra WHERE orden_compra = '".$orden_compra."';";
                    $resultado2 =  mysqli_query($conexion, $consulta2);

                    $id_orden = mysqli_fetch_row($resultado2);

                    $consulta3 = "INSERT INTO oc_gd (id_orden_compra, id_guia_despacho) 
                    VALUES ('$id_orden[0]', trim('$guia_despacho'));";

                    if ($conexion->connect_error) {
                        die("Error al conectar a la base de datos" . $conexion->connect_error);
                    }
                    $resultado3 = mysqli_query($conexion, $consulta3);
                    header('location: ../../pantallas/ingresarOrden.php');
                    exit;
                } else {
                    echo '<script>alert("eeee");</script>';
                }
                header('location: ../../pantallas/ingresarOrden.php');
            } else {
                echo '<script>alert("Ya se ha agregado esta orden de compra");</script>';
            }
        }
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        $conexion = null;
    }
    header('location: ../../pantallas/ingresarOrden.php');
    exit();
}
