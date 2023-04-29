<form method="post" class="d-grid gap-2 form-group  ">

    <!-- FITLTRADO DE SERIE  -->
    <div class="mb-4">
        <input id="serie_equipo" type="text" name="serie_equipo" class="form-control" placeholder="Ingrese la serie del equipo" autofocus>
    </div>
    <!-- FITLTRADO DE RECINTO  -->
    <div class="form-group mb-4">
        <?php
        include('options/filtrarRecinto.php'); ?>
    </div>
    <div class="form-group mb-4">
        <?php
        include('options/filtrarTipoEquipo.php');
        ?>
    </div>
    <div class=" mb-4">
        <?php
        include('options/filtrarMarca.php');
        ?>
    </div>
    <div class=" mb-4">
        <?php
        include('options/filtrarModelo.php');
        ?>
    </div>
    <div class=" mb-4">
        <?php
        include('options/filtrarTipoEquipo.php');
        ?>
    </div>
    <div class="col-4" style="border-right:3px whitesmoke solid;">
        <div class=" mb-4">
            <?php
            include('options/filtrarRecinto.php');
            ?>
        </div>
        <div class=" mb-4">
            <?php
            include('options/filtrarServicio.php');
            ?>
        </div>
        <div class=" mb-4">
            <input id="recepciona" type="text" name="recepciona" value="" placeholder="Responsable de la recepcion">
        </div>
        <div class=" mb-4">
            <input id="entrega" type="text" name="entrega" value="" placeholder="Responsable de la entrega">
        </div>
    </div>

    <!-- BOTON DE FILTRAR  -->
    <span style="display: flex; justify-content: center">
        <span>
            <button type="submit" name="filtrar_busqueda" class="btn btn-primary " value="Filtrar registros">Filtrar busqueda <span class="material-symbols-outlined" style="vertical-align: middle"> search </span></button>
        </span>

    </span>
</form>