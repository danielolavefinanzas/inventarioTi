<?php 
    
    $consulta = "SELECT * FROM recinto";
    $result = mysqli_query( $conexion, $consulta );
    echo "<select class='form-control' name='recinto' id='recintos'>";
    echo "<option value='".$equipo['id_recinto']."'>Seleccione un recinto: </option> ";
    while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row[ 'id_recinto' ]."'>".$row[ 'ubicacion' ] ." "."</option>";
    } 
    echo "</select>"
   
?>
<select style="background:rgba(10, 139, 255, 0.5); font-size:1.2em;" name="orden_serie" class="container text-center form-control" id="" >
<?php 
    // include('../conexiones/conexionRim.php');
    $resultadoSerie=mysqli_query($conexion,"select * from orden_serie") or
    die(mysqli_error($conexion));
    while ($orden_serie = mysqli_fetch_array($resultadoSerie))
        {
            if ($orden_serie['id_orden_serie']==$res['id_orden_serie'])
            echo "<option value=\"".$orden_serie['id_orden_serie']."\" selected>".$orden_serie['serie_equipo']."</option>";         
            else
            echo "<option value=\"".$orden_serie['id_orden_serie']."\">".$orden_serie['serie_equipo']."</option>";
        }		
?>  
</select>