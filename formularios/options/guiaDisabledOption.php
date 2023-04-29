<?php

// $conexion = mysqli_connect("10.7.120.72", "rim", "rim_7222", "m_rim");
// if ($conexion->connect_errno) {
//     echo 'Falló la conexion mysqli' . $conexion->connect_errno;
// }

// $data = file_get_contents("php://input");
// // if (isset($_GET['id_guia_despacho'])) {

//     $id_guia_despacho = $_GET['id_guia_despacho'];
//     // $data = file_get_contents("php://input");


//     $consulta = "SELECT 
//                             distinct gd.id_guia_despacho,
//                             gd.guia_despacho 
//                             FROM guia_despacho gd
//                             inner join gd_serie gs on gs.id_guia_despacho = gd.id_guia_despacho
//                             where gd.id_guia_despacho = $id_guia_despacho";

//     $result = mysqli_query($conexion, $consulta);
//     echo " <select class='form-control' name='id_guia' id='id_guia_despacho' hidden>";
//     echo "<option value=''>Seleccione el id_guia:</option>";
//     while ($row = mysqli_fetch_array($result)) {
//         echo "<option value='" . $row['id_guia_despacho'] . "' selected >" . $row['guia_despacho'] . "</option>";
//     }
//     echo "</select>";
// } else {
//     echo 'No se recibió la id';
// }
