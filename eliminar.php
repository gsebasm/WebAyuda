<?php 
    if(!isset($_GET['id'])){
        header('Location: integrantes.php?mensaje=error');
        exit();
    }

    include './daos/dao.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("DELETE FROM persona where id = ?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado === TRUE) {
        header('Location: integrantes.php?mensaje=eliminado');
    } else {
        header('Location: integrantes.php?mensaje=error');
    }
    
?>