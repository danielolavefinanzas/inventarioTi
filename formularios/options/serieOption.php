<?php
include('../conexiones/conexionRim.php');



$consulta = "SELECT 
                    gd_serie.id_guia_despacho,
                    gd.guia_despacho,
                    serie_equipo, 
                    p.nombre_proveedor 
                    proveedor
                    FROM m_rim.gd_serie  
                    inner join guia_despacho gd on gd.id_guia_despacho = gd_serie.id_guia_despacho
                    inner join proveedores p on p.id_proveedor = gd.id_proveedor
                    where serie_equipo != '' 
                    group by gd_serie.id_guia_despacho, serie_equipo, p.nombre_proveedor
    ";
$result = mysqli_query($conexion, $consulta);

echo "<select class='form-control' name='serie_equipo' id='series'>";
echo "<option value=''>Seleccione la serie: </option> ";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['serie_equipo'] . "' data-id_guia='" . $row['id_guia_despacho'] . "'>" . $row['serie_equipo'] . "" . ' - ( ' . $row['proveedor'] . ' ) ' . "</option>";
}
echo "</select>";
