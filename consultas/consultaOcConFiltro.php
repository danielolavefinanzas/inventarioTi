<?php
if (isset($_POST['filtrar_busqueda_oc'])) {

    $serie_equipo = $_POST['serie_equipo'];
    $orden_compra = $_POST['orden_compra'];

    $consulta = "with filter AS( SELECT  '$serie_equipo' serie_equipo, '$orden_compra' orden_compra)  

        select orden_serie.* from m_rim.orden_serie, filter
        
        where 
        (
            ((filter.serie_equipo <> '') and (orden_serie.serie_equipo = filter.serie_equipo)) or 
            ((filter.serie_equipo = '') and (orden_serie.serie_equipo <> ''))
        )
        and 
        (
            ((filter.orden_compra <> '') and (orden_serie.orden_compra = filter.orden_compra)) or 
            ((filter.orden_compra = '') and (orden_serie.orden_compra <> ''))
        );";
}
