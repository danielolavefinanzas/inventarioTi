<?php 
    
    include('../consultas/consultaTipo.php');
    include('../conexiones/conexionRim.php');
    $result = mysqli_query( $conexion, $consulta );
    echo "<select  name='tipo_equipo' id='tipo_equipo' style='margin-left:20px;'>";
    echo "<option value=''>Seleccione el tipo:</option> ";
    while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row[ 'id_tipo_equipo' ]."'>".$row[ 'nombre_tipo' ] ." (".$row['id_tipo_equipo'].")"."</option>";
    } 
    echo "</select>"
   
?>