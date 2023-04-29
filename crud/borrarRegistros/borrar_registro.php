<?php
session_start();
?>
<script>
    // LLAMADA A LA FUNCION ALERTA 
    alerta();
    // FUNCION ALERTA 
    const alerta = () => {
        mensaje = confirm("¿Desea eliminar por completo este campo?");
    }
</script>
<?php
if (isset($_GET['id'])) {
    try {
        $id = $_GET['id'];
        include('../../conexiones/conexionRim.php');
        $consul = "DELETE FROM equipo WHERE `equipo`.`id` = $id";
        if ($conexion->connect_error) {
            die("Error al conectar a la base de datos" . $conexion->connect_error);
        }
        echo 'id_equipo: '. $id;
        echo '</br>';
        echo 'consulta: '. $consul;

        $resultado = mysqli_query($conexion, $consul);
        try {
            if ($resultado) {
                header('location: ../../pantallas/home.php');
                exit;
            } else {
                echo "";
            }
        } catch (\Throwable $th) {
            echo"";
        }
        // header('location: /inventarioti/pantallas/ingresarequipo.php');
    } catch (\Throwable $th) {
        echo $consul . "<br>" . $th->getMessage();
        $conexion = null;
    }
    $_SESSION['message'] = 'Elemento eliminado con exito';
    // header('location: ../../pantallas/home.php');
    exit();
}
?>