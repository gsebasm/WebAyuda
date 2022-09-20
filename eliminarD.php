<?php 
    if(!isset($_GET['id'])){
        header('Location: donaciones.php?mensaje=error');
        exit();
    }

    include './daos/dao.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("DELETE FROM donaciones where id = ?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado === TRUE) {
        header('Location: donaciones.php?mensaje=eliminado');
    } else {
        header('Location: donaciones.php?mensaje=error');
    }
    
?>