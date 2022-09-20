<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEdad"]) || empty($_POST["txtDonacion"])){
        header('Location: donaciones.php?mensaje=falta');
        exit();
    }

    include_once './daos/dao.php';
    $nombre = $_POST["txtNombre"];
    $edad = $_POST["txtEdad"];
    $donacion = $_POST["txtDonacion"];
    
    $sentencia = $bd->prepare("INSERT INTO donaciones(nombre,edad,donacion) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$nombre,$edad,$donacion]);

    if ($resultado === TRUE) {
        header('Location: donaciones.php?mensaje=registrado');
    } else {
        header('Location: donaciones.php?mensaje=error');
        exit();
    }
    
?>