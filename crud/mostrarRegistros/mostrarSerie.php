<?php
include('../consultas/consultaSerie.php');
$connect_sv = include '../conexiones/sv_local_connect.php';
$dsn = 'mysql:host=' . $connect_sv['db']['host'] . ';dbname=' . $connect_sv['db']['name'];
$conexion = new PDO($dsn, $connect_sv['db']['user'], $connect_sv['db']['pass'], $connect_sv['db']['options']);

$sentencia = $conexion->query($consulta);
$series = $sentencia->fetchAll(PDO::FETCH_OBJ);

foreach ($series as $serie) { ?>
    <tr>
        <td style="background-color: #ffdfd4;"> <?php echo $serie->id_guia_despacho; ?> </td> 
        <td> <?php echo $serie->serie_equipo; ?> </td>
        <td style="background:#F4F4F4;"> <?php echo $serie->orden_compra; ?> </td>
        <td> <?php echo $serie->guia_despacho; ?> </td>
        <td style="background:#F4F4F4;">
            <?php
            echo $serie->nombre_proveedor;
            ?>
        </td>
        <td style="background-color: #ffdfd4;">
            <a id='delete' onclick="borrar()" href="../crud/borrarRegistros/borrar_serie.php?id=<?php echo $serie->id_guia_despacho?>&serie=<?php echo $serie->serie_equipo ?>&prov=<?php echo $serie->id_proveedor?>&oc=<?php echo $serie->id_orden_compra?>">
                <span class="material-symbols-outlined"> delete </span></a>
        </td>
    </tr>
<?php
}
?>