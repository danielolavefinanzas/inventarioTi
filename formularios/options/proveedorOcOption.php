<?php 
    include('../../conexiones/conexionRim.php');
    
    $id_guia_despacho = $_POST['id_guia_despacho'];
    $consulta = "SELECT 
                distinct prov.id_proveedor,
                nombre_proveedor 
                FROM proveedores prov
                inner join guia_despacho gd on gd.id_proveedor = prov.id_proveedor
                where gd.id_guia_despacho = $id_guia_despacho";
    $result = mysqli_query( $conexion, $consulta );
    echo "<select class='form-control' name='proveedor' id='proveedor'>";
    echo "<option value=''>Seleccione el proveedor:</option> ";
    while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row[ 'id_proveedor' ]."' selected >".$row[ 'nombre_proveedor' ] ." "."</option>";
    } 
    echo "</select>"
   
?>