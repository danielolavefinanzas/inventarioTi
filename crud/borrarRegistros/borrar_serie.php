|<?php
    session_start();
    ?>
<?php
if (isset($_GET['id']) && $_GET['serie']) {
    try {
        $id = $_GET['id'];
        $serie_equipo = $_GET['serie'];
        $id_orden_compra = $_GET['oc'];
        $proveedor = $_GET['prov'];
        echo 'id_guia_despacho: ' . $id;
        echo '</br>';
        echo 'serie_equipo : ' . $serie_equipo;
        echo '</br>';
        echo 'id_orden_compra : ' . $id_orden_compra;
        echo '</br>';
        echo 'proveedor: ' . $proveedor;
        echo '</br>';

        include('../../conexiones/conexionRim.php');

        if ($id_orden_compra != '') {

            $consulta4 = "SELECT id_orden_compra from orden_compra where orden_compra = $id_orden_compra";
            $resultado4 = mysqli_query($conexion, $consulta4);

            if ($id_oc = mysqli_fetch_row($resultado4)) {

                if ($resultado4) {

                    $consulta5 = "DELETE FROM oc_gd WHERE id_orden_compra = $id_oc[0] and = id_guia_despacho = " . $id;
                    $resultado5 = mysqli_query($conexion, $consulta5);

                    if ($resultado5) {

                        $consulta6 = "DELETE FROM orden_compra WHERE `orden_compra`.`id_orden_compra` = $id_oc and = id_proveedor = " . $proveedor;

                        if ($conexion->connect_error) {
                            die("Error al conectar a la base de datos" . $conexion->connect_error);
                        }
                        $resultado6 = mysqli_query($conexion, $consulta6);
                        header('location: /inventarioti/pantallas/ingresarSerie.php');
                        exit;
                    }
                }
            } else {
                echo 'No existe OC';
            }
        }

        $consulta2 = "DELETE FROM gd_serie WHERE serie_equipo = '$serie_equipo' and id_guia_despacho = $id;";
        if ($conexion->connect_error) {
            die("Error al conectar a la base de datos" . $conexion->connect_error);
        }
        $resultado2 = mysqli_query($conexion, $consulta2);

        if ($resultado2) {
            $consulta3 = "DELETE FROM guia_despacho WHERE id_guia_despacho = $id
                                    and id_guia_despacho not in (select id_guia_despacho from oc_gd where  oc_gd.id_guia_despacho = guia_despacho.id_guia_despacho)
                                    and id_guia_despacho not in (select id_guia_despacho from gd_serie where  gd_serie.id_guia_despacho = guia_despacho.id_guia_despacho)";
            if ($conexion->connect_error) {
                die("Error al conectar a la base de datos" . $conexion->connect_error);
            }
            $resultado3 = mysqli_query($conexion, $consulta3);
        }
    } catch (\Throwable $th) {
        echo 'error' . "<br>" . $th->getMessage();
        $conexion = null;
    }

    header('location: /inventarioti/pantallas/ingresarSerie.php');
    exit();
}
?>