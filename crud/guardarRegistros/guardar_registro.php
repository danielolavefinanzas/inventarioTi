<?php

try {
    // Conexión a la base de datos
    include('../../conexiones/conexionRim.php');

    // Obtención de los datos del formulario mediante la lectura del cuerpo de la petición
    $data = file_get_contents("php://input");
    $formdata = array();
    parse_str($data, $formdata);

    // Extracción de los valores de los campos del formulario
    $serie_equipo = mysqli_real_escape_string($conexion, $formdata["serie_equipo"]);
    $tipo_equipo = mysqli_real_escape_string($conexion, $formdata["tipo_equipo"]);
    $marca = mysqli_real_escape_string($conexion, $formdata["marca"]);
    $modelo = mysqli_real_escape_string($conexion, $formdata["modelo"]);
    $recinto = mysqli_real_escape_string($conexion, $formdata["recinto"]);
    $servicio = mysqli_real_escape_string($conexion, $formdata["servicio"]);
    $recepciona = mysqli_real_escape_string($conexion, $formdata["recepciona"]);
    $entrega = mysqli_real_escape_string($conexion, $formdata["entrega"]);
    $id_guia = mysqli_real_escape_string($conexion, $formdata["id_guia"]);

    // Consulta para verificar si ya existe algún equipo registrado en la guía de despacho
    $consulta0 = "SELECT serie_equipo FROM equipo WHERE id_guia_despacho = $id_guia;";
    $resultado0 = mysqli_query($conexion, $consulta0);

    if ($resultado0) {
        // Verificar si la serie del equipo ya está registrada en la guía de despacho
        $encontrado = false;
        while ($fila = mysqli_fetch_assoc($resultado0)) {
            if ($fila['serie_equipo'] == $serie_equipo) {
                $encontrado = true;
                break;
            }
        }

        if ($encontrado) {
            // Impresión de un mensaje de error si la serie del equipo ya existe en la guía de despacho
            echo '<script>alert("Esta serie ya tiene un registro."); window.location.href="../../pantallas/home.php";</script>';
        } else {
            // Inserción del equipo en la base de datos
            $consulta1 = "INSERT INTO equipo (serie_equipo, id_tipo_equipo, id_marca, id_modelo, id_recinto, id_servicio, recepciona, entrega, id_guia_despacho) 
                            VALUES ('$serie_equipo', $tipo_equipo, $marca, $modelo, $recinto, $servicio, '$recepciona', '$entrega', $id_guia);";
            $resultado1 = mysqli_query($conexion, $consulta1);

            if ($resultado1) {
                // Redirección a la página principal si la inserción fue exitosa
                ob_end_clean();
                header('Location: ../../pantallas/Home.php');
                exit();
            } else {
                // Impresión de un mensaje de error si la inserción falló
                echo '<script>alert("Ha ocurrido un error al guardar el registro.");  window.location.href="../../pantallas/home.php"; </script>';
            }
        }
    } else {
        // Impresión de un mensaje de error si la consulta falló
        echo '<script>alert("Ha ocurrido un error al buscar los registros existentes."); window.location.href="../../pantallas/home.php";</script>';
    }
} catch (PDOException $e) {
    // Impresión de un mensaje de error si hubo un problema con la conexión a la base de datos
    echo "Error al conectar a la base de datos: " . $e->getMessage();
} finally {
    // Cierre de la conexión a la base de datos
    mysqli_close($conexion);
}
