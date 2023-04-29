<?php 
include('../../inventarioti/conexiones/conexionRim.php');
$idEquipo = $_GET["idEquipo"];
$consultaById = "   
            SELECT 	 
            id_equipo,
            orden_serie.serie_equipo,
            orden_serie.orden_compra,
            orden_serie.guia_despacho,
            tipo_equipo.nombre_tipo,
            recinto.ubicacion,
            servicios.nombre_servicio,
            marcas.nombre_marca,
            modelos.nombre_modelo,
            recepciona,
            entrega
            FROM ((((((equipo
            INNER JOIN orden_serie ON equipo.id_serie_equipo = orden_serie.id_orden_serie)
            INNER JOIN tipo_equipo ON equipo.id_tipo_equipo= tipo_equipo.id_tipo_equipo)
            INNER JOIN recinto ON equipo.id_recinto = recinto.id_recinto)
            INNER JOIN servicios ON equipo.id_servicio = servicios.id_servicio)
            INNER JOIN marcas ON equipo.id_marca= marcas.id_marca)
            INNER JOIN modelos ON equipo.id_modelo = modelos.id_modelo)
            where id_equipo = $idEquipo
            ;
    ";
    $myArray = array();    
    $result = mysqli_query( $conexion,  $consultaById);
   
    if($result){
        while($row = $result->fetch_assoc()) {
            $myArray[] = $row;
        }
        echo json_encode($myArray, true);
    }else{
        echo "Error";
    }
