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
        $consul = "DELETE FROM marcas WHERE `marcas`.`id_marca` = $id";
        if ($conexion->connect_error) {
            die("Error al conectar a la base de datos" . $conexion->connect_error);
        }

        $resultado = mysqli_query($conexion, $consul);
        try {
            if ($resultado) {
                header('location: /inventarioti/pantallas/ingresarMarca.php');
                exit;
            } else {
                echo
                "<script>
                    alert('Ha ocurrido un error. 
                    Verifique que la marca no tenga registros asignados.');
                    window.location= '/inventarioti/home.php'
                 </script>";
            }
        } catch (\Throwable $th) {
            echo
            "<script>
                alert('Ha ocurrido un error. 
                Verifique que la marca no tenga registros asignados.');
                window.location= '/inventarioti/home.php'
             </script>";
        }
        // header('location: /inventarioti/pantallas/ingresarmarca.php');
    } catch (\Throwable $th) {
        echo $consul . "<br>" . $th->getMessage();
        $conexion = null;
    }
    $_SESSION['message'] = 'Elemento eliminado con exito';
    header('location: /inventarioti/pantallas/ingresarMarca.php');
    exit();
}
?>