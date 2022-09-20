<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEdad"]) || empty($_POST["txtTiempo"])){
        header('Location: integrantes.php?mensaje=falta');
        exit();
    }

    include_once './daos/dao.php';
    $nombre = $_POST["txtNombre"];
    $edad = $_POST["txtEdad"];
    $tiempo = $_POST["txtTiempo"];
    
    $sentencia = $bd->prepare("INSERT INTO persona(nombre,edad,tiempo) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$nombre,$edad,$tiempo]);

    if ($resultado === TRUE) {
        header('Location: integrantes.php?mensaje=registrado');
    } else {
        header('Location: integrantes.php?mensaje=error');
        exit();
    }
    
?>