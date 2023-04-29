<?php

$consulta = "SELECT * FROM modelos";
include('../conexiones/conexionRim.php');
$result = mysqli_query($conexion, $consulta);
echo "<select name='modelo' id='modelos'>";
echo "<option value=''>Elija un modelo: </option> ";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['id_modelo'] . "'>" . $row['nombre_modelo'] . " (" . $row['id_modelo'] . ")" . "</option>";
}
echo "</select>";
