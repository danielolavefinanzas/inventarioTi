<?php 
include('../conexiones/conexionRim.php');

$id_oc = $_GET["id_oc"];

$consulta = "SELECT oc.*, prov.nombre_proveedor proveedor FROM m_rim.orden_compra oc
inner join proveedores prov on prov.id_proveedor = oc.id_proveedor
where id_orden_compra = ".$id_oc ;

$result =  mysqli_query($conexion, $consulta);
$row = mysqli_fetch_array($result);
if($row){
    echo json_encode($row, true);
}else{
    echo "No hubo resultados";
}

?>