<?php
include('../conexiones/conexionRim.php');
include('../consultas/consultaTipo.php');
$result = mysqli_query($conexion, $consulta);
while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
        <td> <?php echo $row['nombre_tipo']; ?> </td>
        <td>
            <a id='delete' onclick="borrar()" href="../crud/borrarRegistros/borrar_tipo.php?id=<?php echo $row['id_tipo_equipo']; ?>">
                <span class="material-symbols-outlined"> delete </span></a>
            <a href="../crud/editarRegistros/editar_tipo.php?id=<?php echo $row['id_tipo_equipo']; ?>">
                <span class="material-symbols-outlined"> edit </span></a>
        </td>
    </tr>
<?php }
?>