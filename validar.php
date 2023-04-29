<?php
    session_start();
    include('./conexiones/conexionRim.php');

    if (isset($_POST['submit_index'])) {
        try{
        $usuario = $_POST[ 'usuario' ];
        $usuario=md5( $_POST [ 'usuario' ] );
        $password=$_POST[ 'password' ];
        $password = md5 ( $_POST [ 'password' ] );
        
        $_SESSION['usuario'] = $usuario;
        $_SESSION['password'] = $password;
        
        
        // include( 'SistemaNancy/Db.php' );
        if($conexion->connect_error){
            die("Error al conectar a la base de datos" .$conexion->connect_error );
        }
        //usuario: naguilar, contraseña: 1234
        
        $consulta = " SELECT * FROM usuarios where login='$usuario' and password ='$password'"; 

        $resultado = mysqli_query ( $conexion, $consulta );
        $datos = mysqli_num_rows($resultado);
            if ($datos) {
                header('location: ./pantallas/home.php');
            } else {
                include('index.php');
                echo '
                <div class=" container alert alert-danger d-flex alert-dismissible fade show align-items-center" role="alert">
                    <strong>Error de autentificación.</strong> Verifique los campos y vuelva a intentarlo.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                exit;
            }            
            mysqli_free_result($resultado);
            mysqli_close($conexion);
        }catch(PDOException $e )
        {echo 'error en index validar';}
    }
?>
