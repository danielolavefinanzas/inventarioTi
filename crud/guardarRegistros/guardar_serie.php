<?php

// if (isset($_POST['oc_serie_btn'])){

/*si existe la GUIA_DESPACHO y el PROVEEDOR y la SERIE{
	No guardar
}pero si existe la GUIA DESPACHO otro PROVEEDOR y la misma SERIE {
	Si guardar
}*/

try {
    // VARIABLES DEL FORMULARIO 
    $proveedor = $_GET['proveedor'];
    $guia_despacho = $_GET['guia_despacho'];
    $serie_equipo = $_GET['serie'];
    $data = file_get_contents("php://input");

    if (!$guia_despacho and !$serie_equipo and !$proveedor) {
        echo "debe indicar parámetros necesarios";
        return false;
    }

    include('../../conexiones/conexionRim.php');

    $consulta0 = "  SELECT
                    *
                    from guia_despacho gd
                    inner join gd_serie gs on gs.id_guia_despacho = gd.id_guia_despacho
                    where gs.serie_equipo = '$serie_equipo' and gd.guia_despacho = '$guia_despacho' and  gd.id_proveedor = $proveedor;";

    if ($conexion->connect_error) {
        die("Error al conectar a la base de datos" . $conexion->connect_error);
    }

    $resultado0 = mysqli_query($conexion, $consulta0);


    if (mysqli_fetch_row($resultado0) < 1) {

        $consulta5 = "SELECT * FROM m_rim.guia_despacho
                        where guia_despacho = '$guia_despacho' and id_proveedor = " . $proveedor;

        $resultado5 = mysqli_query($conexion, $consulta5);

        if (mysqli_fetch_row($resultado5) < 1) {

            $consulta1 = "INSERT INTO guia_despacho ( guia_despacho, id_proveedor ) 
                VALUES (trim('$guia_despacho'), $proveedor);";

            if ($conexion->connect_error) {
                die("Error al conectar a la base de datos" . $conexion->connect_error);
            }
            $resultado1 = mysqli_query($conexion, $consulta1);
        }

        $consulta2 = "SELECT id_guia_despacho FROM guia_despacho WHERE guia_despacho = '$guia_despacho' and id_proveedor = $proveedor ;";
        $resultado2 =  mysqli_query($conexion, $consulta2);

        if ($id_guia = mysqli_fetch_row($resultado2)) {

            $consulta3 = "SELECT * FROM gd_serie where serie_equipo = '$serie_equipo' and id_guia_despacho = $id_guia[0];";
            $resultado3 =  mysqli_query($conexion, $consulta3);
            if (mysqli_fetch_row($resultado3) < 1) {

                $consulta4 = "INSERT INTO gd_serie ( serie_equipo, id_guia_despacho ) 
                                VALUES ( trim('$serie_equipo'), $id_guia[0] );";

                $resultado4 =  mysqli_query($conexion, $consulta4);
                if ($resultado4) {
                    header('location: ../../pantallas/ingresarSerie.php');
                    exit;
                }
            }
        }
    }
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    $conexion = null;
}
    
// }
