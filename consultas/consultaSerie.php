<?php

$consulta = "SELECT 
gd.id_guia_despacho,
prov.id_proveedor,
prov.nombre_proveedor,
gd.guia_despacho,
oc.id_orden_compra,
oc.orden_compra,
gd_serie.serie_equipo 
from gd_serie
left join guia_despacho gd on gd.id_guia_despacho = gd_serie.id_guia_despacho
left join oc_gd on oc_gd.id_guia_despacho = gd.id_guia_despacho
left join orden_compra oc on oc.id_orden_compra = oc_gd.id_orden_compra
left join proveedores prov on prov.id_proveedor = gd.id_proveedor

	   				 ";

