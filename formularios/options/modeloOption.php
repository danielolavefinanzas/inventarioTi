<?php 
    
    $consulta = "SELECT distinct id_modelo,nombre_modelo
    FROM m_rim.modelos  where nombre_modelo != '' ORDER BY nombre_modelo ASC;";
    include('../conexiones/conexionRim.php');
    $result = mysqli_query( $conexion, $consulta );
    echo "<select class='form-control' name='modelo' id='modelos'>";
    echo "<option value=''>Elija un modelo: </option> ";
    while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row[ 'id_modelo' ]."'>".$row[ 'nombre_modelo' ] ." "."</option>";
    } 
    echo "</select>";