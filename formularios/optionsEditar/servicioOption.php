<?php 
    
    $consulta = "SELECT * FROM servicios";
    $result = mysqli_query( $conexion, $consulta );
    echo "<select class='form-control' name='servicio' id='servicios'>";
    echo "<option value='".$equipo['id_servicio']."'>Seleccione un servicio: </option> ";
    while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row[ 'id_servicio' ]."'>".$row[ 'nombre_servicio' ] ." "."</option>";
    } 
    echo "</select>"
   
?>