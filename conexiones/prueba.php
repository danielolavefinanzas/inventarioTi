<?php
$connect_sv = include 'sv_local_connect.php';
$dsn = 'mysql:host=' . $connect_sv['db']['host'] . ';dbname=' . $connect_sv['db']['name'];
$conexion = new PDO($dsn, $connect_sv['db']['user'], $connect_sv['db']['pass'], $connect_sv['db']['options']);

$sentencia = $conexion->query("SELECT * FROM equipo;");
$equipos = $sentencia->fetchAll(PDO::FETCH_OBJ);
foreach($equipos as $equipo) { ?>
        <p><?php echo $equipo->id_equipo ?></p>
    <?php }
?>