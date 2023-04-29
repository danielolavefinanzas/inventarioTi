<?php
include('../conexiones/conexionRim.php');

$consulta = "SELECT distinct
                gs.id_guia_despacho, 
                prov.nombre_proveedor,
                gd.guia_despacho 
                FROM gd_serie gs
                inner join guia_despacho gd on gd.id_guia_despacho = gs.id_guia_despacho
                inner join proveedores prov on prov.id_proveedor = gd.id_proveedor
                where prov.id_proveedor = gd.id_proveedor and gs.id_guia_despacho != '' order by gd.id_guia_despacho;";

$result = mysqli_query($conexion, $consulta);
echo "<select class='form-control' name='guia_despacho' id='guia_despacho'>";
echo "<option value=''>Seleccione la guía: </option> ";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['id_guia_despacho'] . "'>" . $row['guia_despacho'] . " " . '(' . $row['nombre_proveedor'] . ')' . "</option>";
}
echo "</select>";
