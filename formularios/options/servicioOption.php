<?php 
    
    $consulta = "SELECT distinct id_servicio, nombre_servicio
    FROM m_rim.servicios  where nombre_servicio != '' ORDER BY nombre_servicio ASC;";
    include('../conexiones/conexionRim.php');
    $result = mysqli_query( $conexion, $consulta );
    echo "<select class='form-control' name='servicio' id='servicios'>";
    echo "<option value=''>Seleccione un recinto: </option> ";
    while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row[ 'id_servicio' ]."'>".$row[ 'nombre_servicio' ] ." "."</option>";
    } 
    echo "</select>"
   
?>