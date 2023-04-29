<?php 
    
    $consulta = "SELECT distinct recinto.ubicacion  FROM recinto;";
    include('../conexiones/conexionRim.php');
    $result = mysqli_query( $conexion, $consulta );
    echo "<select name='recinto' id='recintos' style='margin-left:20px;'>";
    echo "<option value=''>Seleccione la unidad: </option> ";

    while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row[ 'id_recinto' ]."'>".$row[ 'ubicacion' ] ." (".$row['id_recinto'].")"."</option>";
    } 
    echo "</select>"
   
?>