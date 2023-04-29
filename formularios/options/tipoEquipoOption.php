<?php 
    
    include('../consultas/consultaTipo.php');
    include('../conexiones/conexionRim.php');
    $result = mysqli_query( $conexion, $consulta );
    echo "<select class='form-control' name='tipo_equipo' id='tipo_equipo'>";
    echo "<option value=''>Seleccione el tipo:</option> ";
    while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row[ 'id_tipo_equipo' ]."'>".$row[ 'nombre_tipo' ] ." "."</option>";
    } 
    echo "</select>"
   
?>