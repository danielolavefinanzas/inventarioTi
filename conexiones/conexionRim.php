<?php 

$conexion = mysqli_connect ( "localhost", "root", "", "m_rim" );
if($conexion->connect_errno){
    echo 'Falló la conexion mysqli'. $conexion->connect_errno;
}
?>