<?php 
    
    $consulta = "SELECT * FROM servicios";
    include('../conexiones/conexionRim.php');
    $result = mysqli_query( $conexion, $consulta );
    echo "<select name='servicio' id='servicios'>";
    echo "<option value=''>Seleccione un servicio: </option> ";
    while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row[ 'id_servicio' ]."'>".$row[ 'nombre_servicio' ] ." (".$row['id_servicio'].")"."</option>";
    } 
    echo "</select>"
   
?>