<form class="d-grid gap-2" method="post" action="/../inventarioti/crud/editarRegistros/editar_registro.php">
<!-- CAMPO DEL ID  -->
<h4 class="d-flex justify-content-start mt-2"><strong>Editar una registro</strong></h4>

    <hr class="border  border-1 opacity-50">

    <div class="col-sm ">
        <div class="form-group mb-4"> 
            <?php 
                include('../consultas/consultaRegistro.php');
            ?>
            <label for="serie_equipo" class="control-label container text-center"><strong>Serie de Equipo</strong></label>
            <!-- <input type="text" list="series" class="form-control" id="serie_equipo" name="serie_equipo" value=" " placeholder="Edite la serie del equipo" disabled> -->
 
            <select style="background:rgba(10, 139, 255, 0.5); font-size:1.2em;" class="container text-center form-control" name="tipo_equipo" id="">
                    <?php 
       
                        $resultadoSerie=mysqli_query($conexion,"SELECT id_orden_serie, serie_equipo FROM m_rim.orden_serie;") or
                        die(mysqli_error($conexion));
                        while ($orden_serie=mysqli_fetch_array($resultadoSerie))
                            {
                                
                                if ($orden_serie['id_orden_serie']==$res['id_serie_equipo'])
                                echo "<option value=\"".$orden_serie['id_orden_serie']."\" selected>".$orden_serie['serie_equipo']."</option>";         
                                else
                                echo "<option value=\"".$orden_serie['id_orden_serie']."\">".$orden_serie['serie_equipo']."</option>";
                                var_dump($orden_serie['id_orden_serie']);
                                var_dump($res['id_serie_equipo']);
                            }		
                    ?>
                    </select>
                         

        </div> 
    </div>
    <div class="row">

        <div class="col-3 col-sm">
            <div class="form-group mb-4"> 
                <label for="tipo_equipo" class="control-label"><strong>Tipo de equipo</strong></label>
                <select class="form-control"name="tipo_equipo" id="">
                    <?php 
                        $resultadoTipo=mysqli_query($conexion,"select * from tipo_equipo") or
                        die(mysqli_error($conexion));
                        while ($tipo_equipo=mysqli_fetch_array($resultadoTipo))
                            {
                                if ($tipo_equipo['id_tipo_equipo']==$res['id_tipo_equipo'])
                                echo "<option value=\"".$tipo_equipo['id_tipo_equipo']."\" selected>".$tipo_equipo['nombre_tipo']."</option>";         
                                else
                                echo "<option value=\"".$tipo_equipo['id_tipo_equipo']."\">".$tipo_equipo['nombre_tipo']."</option>";
                            }		
                    ?>
                    </select> 
            </div>
        </div>

        <div class="col-3 col-sm">
            <div class="form-group mb-4"> 
                <label for="marca" class="control-label"><strong>Marca</strong></label>
                <select class="form-control" name="marca" id="">
                    <?php 
                        include('../conexiones/conexionRim.php');
                        $resultadoMarca=mysqli_query($conexion,"select * from marcas") or
                        die(mysqli_error($conexion));
                        while ($marca=mysqli_fetch_array($resultadoMarca))
                        {
                            if ($marca['id_marca']==$res['id_marca'])
                            echo "<option value=\"".$marca['id_marca']."\" selected>".$marca['nombre_marca']."</option>";         
                            else
                            echo "<option value=\"".$marca['id_marca']."\">".$marca['nombre_marca']."</option>";
                        }		
                    ?>  
                </select>
            </div>   
        </div>
        <div class="col-3 col-sm">

            <div class="form-group mb-4"> 
                <label for="modelo" class="control-label"><strong>Modelo</strong></label>
                <select class="form-control"name="modelo" id="">
                    <?php 
                        $resultadoModelo=mysqli_query($conexion,"select * from modelos") or
                        die(mysqli_error($conexion));
                        while ($modelos=mysqli_fetch_array($resultadoModelo))
                            {
                                if ($modelos['id_modelo']==$res['id_modelo'])
                                echo "<option value=\"".$modelos['id_modelo']."\" selected>".$modelos['nombre_modelo']."</option>";         
                                else
                                echo "<option value=\"".$modelos['id_modelo']."\">".$modelos['nombre_modelo']."</option>";
                            }		
                    ?>  
                    </select>
            </div>
        </div>

        
    </div>

    <div class="row">

        <div class="col-3 col-sm">

            <div class="form-group mb-4"> 
                <label for="recinto" class="control-label"><strong>Recinto</strong></label>
                <select class="form-control"name="recinto" id="">
                    <?php 
                        $resultadoRecinto=mysqli_query($conexion,"select * from recinto") or
                        die(mysqli_error($conexion));
                        while ($recinto=mysqli_fetch_array($resultadoRecinto))
                            {
                                if ($recinto['id_recinto']==$res['id_recinto'])
                                echo "<option value=\"".$recinto['id_recinto']."\" selected>".$recinto['ubicacion']."</option>";         
                                else
                                echo "<option value=\"".$recinto['id_recinto']."\">".$recinto['ubicacion']."</option>";
                            }		
                    ?>
                    </select>  
            </div>
        </div>

        <div class="col-3 col-sm">

            <div class="form-group mb-4"> 
                <label for="servicio" class="control-label"><strong>Servicio</strong></label>
                <select class="form-control"name="servicio" id="">
                    <?php 
                        $resultadoServicio=mysqli_query($conexion,"select * from servicios") or
                        die(mysqli_error($conexion));
                        while ($servicio=mysqli_fetch_array($resultadoServicio))
                            {
                                if ($servicio['id_servicio']==$res['id_servicio'])
                                echo "<option value=\"".$servicio['id_servicio']."\" selected>".$servicio['nombre_servicio']."</option>";         
                                else
                                echo "<option value=\"".$servicio['id_servicio']."\">".$servicio['nombre_servicio']."</option>";
                            }		
                    ?>
                    </select>  
            </div>     
        </div>             
    </div>
    <div class="row">

        <div class="col-3 col-sm">

            <!-- CAMPO DE TIPO DEL EQUIPO  -->                              
            <div class="form-group mb-4"> 
                <label for="recepciona" class="control-label"><strong>Recepciona</strong></label>
                <input type="text" class="form-control" id="recepciona" name="recepciona" value="<?php echo $equipo->recepciona ?>" placeholder="Edite el tipo del producto">
            </div>    
        </div>    

        <div class="col-3 col-sm">

            <div class="form-group mb-4"> 
                <label for="entrega" class="control-label"><strong>Entrega</strong></label>
                <input type="text" class="form-control" id="entrega" name="entrega" value="<?php echo $res['entrega'] ?>" placeholder="Edite el tipo del producto">
            </div>    
        </div>
    </div>
    
        <input type="hidden" name="id" value="<?php echo $equipo->id; ?>">
        <!-- BOTON  -->
    <div class="row">
        <div class="col-3 col-sm">
            <span class="d-grid gap-2 d-md-flex"> 
                    <button type="submit" class="btn btn-primary d-flex align-items-center" name="submit_registro" id="guardar_editar" value="Guardar Cambios">
                        Guardar Cambios <span class="material-symbols-outlined"> save</span>
                    </button>
        <div class="col-3 col-sm">

                <a class="btn btn-primary d-flex align-items-center float-sm-end" href="../pantallas/home.php">
                    Volver <span class="material-symbols-outlined">undo</span>
                </a>
            </span> 
    </div>    
        

</form>