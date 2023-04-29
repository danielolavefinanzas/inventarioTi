<?php
include('../conexiones/conexionRim.php');
include('../consultas/consultaProveedor.php');
$result = mysqli_query($conexion, $consulta);
while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
        <td> <?php echo $row['nombre_proveedor']; ?> </td>
        <td>
            <a id='delete' onclick="borrar()" href="../crud/borrarRegistros/borrar_proveedor.php?id=<?php echo $row['id_proveedor']; ?>">
                <span class="material-symbols-outlined"> delete </span></a>
            <a href="../crud/editarRegistros/editar_proveedor.php?id=<?php echo $row['id_proveedor']; ?>">
                <span class="material-symbols-outlined"> edit </span></a>
        </td>
    </tr>
<?php }
?>