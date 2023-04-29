<?php 
    
    $consulta = "SELECT distinct id_recinto , ubicacion  FROM recinto ORDER BY ubicacion ASC;";
    include('../conexiones/conexionRim.php');
    $result = mysqli_query( $conexion, $consulta );
    echo "<select class='form-control' name='recinto' id='recintos'>";
    echo "<option value=''>Seleccione la unidad: </option> ";

    while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row[ 'id_recinto' ]."'>".$row[ 'ubicacion' ] ." "."</option>";
    } 
    echo "</select>"
   
?>