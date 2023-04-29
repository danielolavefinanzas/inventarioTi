<?php
    $consulta = "SELECT distinct id_tipo_equipo ,nombre_tipo
    FROM m_rim.tipo_equipo  where nombre_tipo != '' ORDER BY nombre_tipo ASC;";
?>