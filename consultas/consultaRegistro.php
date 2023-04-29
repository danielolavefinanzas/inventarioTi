<?php

$consulta = "
SELECT
e.id,
e.serie_equipo,
gd.id_guia_despacho,
oc.orden_compra,
gd.guia_despacho,
pr.nombre_proveedor,
tp.nombre_tipo,
re.ubicacion,
sv.nombre_servicio,
ma.nombre_marca,
mo.nombre_modelo,
e.fecha_registro,
e.recepciona,
e.entrega
from
equipo e
left join guia_despacho gd on gd.id_guia_despacho = e.id_guia_despacho
left join oc_gd og on og.id_guia_despacho = gd.id_guia_despacho
left join orden_compra oc on oc.id_orden_compra = og.id_orden_compra
left join tipo_equipo tp on tp.id_tipo_equipo = e.id_tipo_equipo
left join recinto re on re.id_recinto = e.id_recinto
left join servicios sv on sv.id_servicio = e.id_servicio
left join marcas ma on ma.id_marca = e.id_marca
left join modelos mo on mo.id_modelo = e.id_modelo
left join proveedores pr on pr.id_proveedor = gd.id_proveedor
left join gd_serie gs on gs.serie_equipo = e.serie_equipo and gs.id_guia_despacho = gd.id_guia_despacho;"
;
