<?php
include('../conexiones/conexionRim.php');
include('../consultas/consultaMarca.php');
$result = mysqli_query($conexion, $consulta);
while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
        <td> <?php echo $row['nombre_marca']; ?> </td>
        <td>
            <a id='delete' onclick="borrar()" href="../crud/borrarRegistros/borrar_marca.php?id=<?php echo $row['id_marca']; ?>">
                <span class="material-symbols-outlined"> delete </span></a>
            <a href="../crud/editarRegistros/editar_marca.php?id=<?php echo $row['id_marca']; ?>">
                <span class="material-symbols-outlined"> edit </span></a>
        </td>
    </tr>
<?php }
?>