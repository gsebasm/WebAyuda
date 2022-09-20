<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: donaciones.php?mensaje=error');
    }

    include './daos/dao.php';
    $id = $_POST['id'];
    $nombre = $_POST['txtNombre'];
    $edad = $_POST['txtEdad'];
    $donacion = $_POST['txtDonacion'];

    $sentencia = $bd->prepare("UPDATE donaciones SET nombre = ?, edad = ?, donacion = ? where id = ?;");
    $resultado = $sentencia->execute([$nombre, $edad, $donacion, $id]);

    if ($resultado === TRUE) {
        header('Location: donaciones.php?mensaje=editado');
    } else {
        header('Location: donaciones.php?mensaje=error');
        exit();
    }
    
?>