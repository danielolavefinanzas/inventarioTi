<?php
session_start();

if (isset($_GET['id'])) {
    try {
        $id = $_GET['id'];
        include('../../conexiones/conexionRim.php');
        $consul = "DELETE FROM tipo_equipo WHERE `tipo_equipo`.`id_tipo_equipo` = $id";
        if ($conexion->connect_error) {
            die("Error al conectar a la base de datos" . $conexion->connect_error);
        }

        if ($resultado = mysqli_query($conexion, $consul)) {

            header('location: /inventarioti/pantallas/ingresarTipo.php');
        } else {
?>
            <script>
                alert('Hello! I am an alert box!!');
                window.location = ' /inventarioti/pantallas/ingresarTipo.php'
            </script>;
<?php
        }
    } catch (\Throwable $th) {
        echo
        "<script>
                alert('Ha ocurrido un error. 
                Verifique que eltipo de equipo no tenga registros asignados.');
                window.location= '/inventarioti/home.php'
             </script>";
    }
    // header('location: /inventarioti/pantallas/ingresarproveedor.php');

    // header('location: /inventarioti/pantallas/ingresarTipo.php');
    exit();
}
?>