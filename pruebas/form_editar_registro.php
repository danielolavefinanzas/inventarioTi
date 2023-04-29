
<?php
    include('../conexiones/conexionRim.php');
    if (isset($_POST['submit'])) {
        # code...
    }else {
        $id=$_GET['id'];
        $sql="select * from equipo where id='".$id."'";
        $resultado=mysqli_query($conexion,$sql);

        $fila=mysqli_fetch_assoc($resultado);
        $nombre=$fila["serie_equipo"];
        $marca=$fila["marca"];

        mysqli_close($conexion);
    }
?>
<form class="d-grid gap-2" action="<?=$_SERVER['PHP_SELF']?>" method="post">

<!-- CAMPO DEL ID  -->
<h4 class="d-flex justify-content-start mt-2"><strong>Editar una registro</strong></h4>

    <hr class="border  border-1 opacity-50">

    <div class="col ">
        <div class="form-group mb-4"> 
            <label for="serie_equipo" class="control-label"><strong>Serie de Equipo</strong></label>
            <input type="text" class="form-control" id="serie_equipo" name="serie_equipo" value="<?php echo $equipo['id_serie_equipo'] ?>" placeholder="Edite la serie del equipo">
        </div> 
        <div class="form-group mb-4"> 
            <label for="marca" class="control-label"><strong>Marca</strong></label>
            <!-- <input type="text" class="form-control" id="marca" name="marca"  value="<?php echo $equipo['id_recinto']?>" placeholder="Edite el recinto"> -->
            <?php include('./marcaOption.php');?>  
        </div>    
        
        <!-- BOTON  -->

        <span class="d-grid gap-2 d-md-flex"> 
                <button type="submit" class="btn btn-primary d-flex align-items-center" name="submit" value="Guardar Cambios">
                    Guardar Cambios <span class="material-symbols-outlined"> save</span>
                </button>

            <a class="btn btn-primary d-flex align-items-center float-sm-end" href="../pantallas/home.php">
                Ir al inicio <span class="material-symbols-outlined">undo</span>
            </a>
        </span> 
    </div>    
</form>
