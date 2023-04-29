<?php 
    include('../../conexiones/conexionRim.php');

    $consulta = "SELECT distinct serie_equipo
    FROM m_rim.serie_equipo  where serie_equipo != '' ORDER BY serie_equipo ASC;";
    $result = mysqli_query( $conexion, $consulta );
    echo "<datalist class='form' name='serie_equipo' id='series'>";
    echo "<option value='".$row['serie_equipo']."'></option> ";
    while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row[ 'serie_equipo' ]."'>".$row[ 'serie_equipo' ]." "."</option>";
    }
    echo "</datalist>";
?>