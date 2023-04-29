<?php 
    
    $consulta = "SELECT * FROM marcas ORDER BY nombre_marca ASC;";
    include('../conexiones/conexionRim.php');
    $result = mysqli_query( $conexion, $consulta );
    echo "<select class='form-control' name='marca' id='marcas' onchange='ShowSelected()'>";
    echo "<option value=''>Elija una marca: </option> ";
    while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row[ 'id_marca' ]."'>".$row[ 'nombre_marca' ] .""."</option>";
    } 
    echo "</select>";