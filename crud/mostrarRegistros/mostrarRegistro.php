<?php
include('../consultas/consultaRegistro.php');
$connect_sv = include '../conexiones/sv_local_connect.php';
$dsn = 'mysql:host=' . $connect_sv['db']['host'] . ';dbname=' . $connect_sv['db']['name'];
$conexion = new PDO($dsn, $connect_sv['db']['user'], $connect_sv['db']['pass'], $connect_sv['db']['options']);

$sentencia = $conexion->query($consulta);
$equipos = $sentencia->fetchAll(PDO::FETCH_OBJ);

foreach ($equipos as $equipo) { ?>
    <tr>
        <td style="background-color: #ffdfd4;"> <?php echo $equipo->id ?> </td>
        <td> <?php echo $equipo->serie_equipo ?> </td>
        <td style="background:#F4F4F4;"> <?php echo $equipo->orden_compra ?> </td>
        <td > <?php echo $equipo->guia_despacho ?> </td>
        <td style="background-color: #ffdfd4;"> <?php echo $equipo->nombre_proveedor ?> </td>
        <td> <?php echo $equipo->nombre_tipo ?> </td>
        <td style="background:#F4F4F4;"> <?php echo $equipo->ubicacion ?> </td>
        <td> <?php echo $equipo->nombre_servicio ?> </td>
        <td style="background:#F4F4F4;" id="tdMarca"> <?php echo $equipo->nombre_marca ?> </td>
        <td> <?php echo $equipo->nombre_modelo ?> </td>
        <td style="background:#b8daba;"> <?php echo $equipo->fecha_registro ?> </td>
        <td> <?php echo $equipo->recepciona ?> </td>
        <td style="background:#F4F4F4;"> <?php echo $equipo->entrega ?> </td>
        <td style="background-color: #ffdfd4;">
            <a id='delete' onclick="borrar()" href="../crud/borrarRegistros/borrar_registro.php?id=<?php echo $equipo->id ; ?>">
                <span class="material-symbols-outlined"> delete </span></a>
            <!-- <button class="btn_editar"><a class="editbtn" id="btn_editar_1"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="../pantallas/editar_registro.php?id=<?php echo $equipo->id ?>">
                <span id="editar_icono" class="material-symbols-outlined"> edit </span></a></button> -->
            <a class="editbtn text-center" id="btn_editar" href="../pantallas/editar_registro.php?id=<?php echo $equipo->id ?>">
                <span id="editar_icono"><i class="fa-solid fa-pen-to-square fa-2x"></i></span></a>
        </td>
    </tr>
<?php }

?>