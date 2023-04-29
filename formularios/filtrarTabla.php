<form id="form" name="form" method="POST" action="index.php">
    marca
    <select name="buscar_marca" id="buscar_marca">
        <?php
        $consulta = "SELECT * FROM marcas";
        include('../conexiones/conexionRim.php');
        $result = mysqli_query($conexion, $consulta);
        if ($_POST['buscar_marca'] != '') { ?>

            <option value="<?php echo $_POST['buscar_marca']; ?>"> <?php echo $_POST['buscar_marca'] ?> </option>
        <?php }
        echo "<option value=''>Elija una marca: </option> ";
        while ($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['id_marca'] . "'>" . $row['nombre_marca'] . " (" . $row['id_marca'] . ")" . "</option>";
        }
        ?>
    </select>


</form>