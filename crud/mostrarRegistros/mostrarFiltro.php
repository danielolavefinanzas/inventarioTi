<?php
include('../conexiones/conexionRim.php');
include('../vendor/autoload.php');
include('../consultas/consultaFiltro.php');

if (isset($_POST['filtrar_busqueda']) || !isset($_POST['filtrar_busqueda'])) {

    try {

        $result = mysqli_query($conexion,  $consulta);
        while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td> <?php echo $row['id_serie_equipo']; ?> </td>
                <td> <?php echo $row['id_equipo']; ?> </td>
                <td> <?php echo $row['id_recinto']; ?> </td>
                <td> <?php echo $row['id_servicio']; ?> </td>
                <td> <?php echo $row['id_marca']; ?> </td>
                <td> <?php echo $row['id_modelo']; ?> </td>
                <td> <?php echo $row['recepciona']; ?> </td>
                <td> <?php echo $row['entrega']; ?> </td>
                <td>
                    <!-- <a id='delete' onclick="borrar()" href="../crud/borrarRegistros/borrar_registro.php?id=<?php echo $row['id_equipo']; ?>">
                <span class="material-symbols-outlined"> delete </span></a> -->
                    <a class="editbtn" id="btnEditar" data-toggle="modal" data-target="#editar" href="../pantallas/editar_registro.php?id=<?php echo $row['id_equipo']; ?>">
                        <span class="material-symbols-outlined"> edit </span>Editar</a>
                </td>
            </tr>
<?php }
    } catch (PDOException $e) {
        echo 'error' . $e;
    }
}


?>