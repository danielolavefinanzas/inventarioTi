<?php 
    
    $consulta = "SELECT * FROM marcas";
    include('../conexiones/conexionRim.php');
    $result = mysqli_query( $conexion, $consulta );
    echo "<select class='form-control' name='marca' id='marcas'>";
    echo "<option value=''>Elija una marca: </option> ";
    while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row[ 'id_marca' ]."'>".$row[ 'nombre_marca' ] ." "."</option>";
    } 
    echo "</select>";