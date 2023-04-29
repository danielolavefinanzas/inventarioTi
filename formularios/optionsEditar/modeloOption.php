<?php 
    
    $consulta = "SELECT * FROM modelos";
    $result = mysqli_query( $conexion, $consulta );
    echo "<select class='form-control' name='modelo' id='modelos'>";
    echo "<option value='".$equipo['id_modelo']."'>Elija un modelo: </option> ";
    while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row[ 'id_modelo' ]."'>".$row[ 'nombre_modelo' ] ." "."</option>";
    } 
    echo "</select>";