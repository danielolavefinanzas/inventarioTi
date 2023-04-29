<?php 
  
        // VARIABLES DEL FORMULARIO 
       $serie_equipo = $_POST['serie_equipo'];
       $orden_compra = $_POST['orden_compra'];
       $guia_despacho = $_POST['orden_compra'];

       // CONEXION A BASE DE DATOS 
        include('./conexiones/conexionRim.php');
       
           // INSERT A TABLA EQUIPO 
           $consulta = "INSERT INTO orden_serie (serie_equipo, guia_despacho, orden_compra) 
                   VALUES ('$serie_equipo', '$orden_compra', '$guia_despacho');";
               $respuesta = new stdClass();
  
               if($conexion->query($consulta)){
                 $respuesta->mensaje = "Se guardo correctamente";
               }
               else {
                 $respuesta->mensaje = "Ocurrió un error";
               }
               echo json_encode($respuesta);

               echo $sql . "<br>" . $e->getMessage();
               $conexion = null;
        echo '$data2';
?>