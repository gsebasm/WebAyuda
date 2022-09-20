
<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: integrantes.php?mensaje=error');
    }

    include './daos/dao.php';
    $id = $_POST['id'];
    $nombre = $_POST['txtNombre'];
    $edad = $_POST['txtEdad'];
    $tiempo = $_POST['txtTiempo'];

    $sentencia = $bd->prepare("UPDATE persona SET nombre = ?, edad = ?, tiempo = ? where id = ?;");
    $resultado = $sentencia->execute([$nombre, $edad, $tiempo, $id]);

    if ($resultado === TRUE) {
        header('Location: integrantes.php?mensaje=editado');
    } else {
        header('Location: integrantes.php?mensaje=error');
        exit();
    }
    
?>