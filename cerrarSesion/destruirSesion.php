<?php 
    session_start();
    include('../conexiones/conexionRim.php');
    $usuario = $_SESSION['usuario'];
    if(!isset($usuario)){
        header('location: ../index.php');
    }
