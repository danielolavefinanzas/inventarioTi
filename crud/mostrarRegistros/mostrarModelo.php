<?php
include('../conexiones/conexionRim.php');
include('../consultas/consultaModelo.php');
$result = mysqli_query($conexion, $consulta);
while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
        <td> <?php echo $row['nombre_modelo']; ?> </td>
        <td>
            <a id='delete' onclick="borrar()" href="../crud/borrarRegistros/borrar_modelo.php?id=<?php echo $row['id_modelo']; ?>">
                <span class="material-symbols-outlined"> delete </span></a>
            <a href="../crud/editarRegistros/editar_modelo.php?id=<?php echo $row['id_modelo']; ?>">
                <span class="material-symbols-outlined"> edit </span></a>
        </td>
    </tr>
<?php }
?>