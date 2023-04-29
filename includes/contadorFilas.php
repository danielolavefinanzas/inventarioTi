<?php 


    try {
        include('../conexiones/conexionRim.php');
        include('../consultas/consultaFiltro.php');
        $result_count = $conexion->query("SELECT COUNT(*) FROM `equipo`");
        $filas_count = $result_count->fetch_row();
        $result = mysqli_query($conexion,$consulta);
        $filas = mysqli_num_rows($result);
        echo "
                <style>
                    p{
                        font-size:1.2em;
                    }
                    code{ font-size:1.1em;

                </style>

                <hr>
                <div class='grid text-center' >
                    <div class='row'>
                        <div class='text-center col-sm text-end'>
                            <p class='mb-0'>
                                <strong> Número total de registros ( <code>$filas_count[0]</code> ) </strong>
                            </p>
                        </div>            
                    </div>
                </div> 
                <hr>
            ";
        mysqli_free_result($result);

        }catch(PDOException $e)

        {
            echo'error'.$e;
        }
