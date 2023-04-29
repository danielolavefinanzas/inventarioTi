<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./css/styleIndex.css">
    <title>Inicio de Sesión</title>
    
</head>
<body>
<?php     
    include('templates/nav/navIndex.php');
?>
    <!-- CONTENEDOR  -->
   <div class="container-sm mt-5">
       <div class="col-sm-6 ">
            <div class="card card-body shadow-lg p-3 mb-5 bg-body rounded">
                <!-- FORMULARIO DEL LOGIN  -->
                <form class="form-group"  action="validar.php" method="post">
                        <div class="row">
                            <h2 class="fw-bold text-center py-5">Iniciar sesión</h2>
                            <div class="mb-4">
                                <i class="fa-solid fa-user"></i>
                                <label class="form-label" for="usuario">Usuario:</label><br><br>
                                <input class="form-control  " id="usuario" type="text" name="usuario" placeholder="Ingrese su nombre de usuario">
                            </div>
                            <!-- INGRESO CONTRASEÑA  -->
                            <div class="mb-4">
                                <label class="form-label" for="password">Contraseña:</label><br><br>
                                <input class="form-control " id="password" type="password" name="password" placeholder="Ingrese su contraseña">
                            </div>
                            <!-- BOTON  -->
                            <div class="d-grid">
                                <input class=" btn btn-primary mb-5 fw-bold" type="submit" name="submit_index" id="submit_index" value="Iniciar Sesión">
                            </div>
                        </div>
                </form>
            </div>           
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>

