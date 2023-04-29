<?php 
    
    $consulta = "SELECT id_proveedor, nombre_proveedor FROM proveedores;";
    include('../conexiones/conexionRim.php');
    $result = mysqli_query( $conexion, $consulta );
    echo "<select class='form-control' name='proveedor' id='proveedor'>";
    echo "<option value=''>Seleccione el proveedor:</option> ";
    while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row[ 'id_proveedor' ]."'>".$row[ 'nombre_proveedor' ] ." "."</option>";
    } 
    echo "</select>"
   
?>