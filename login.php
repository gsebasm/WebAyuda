<?php
require_once("./daos/user_dao.php");

$myUser = new user();
 
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];
   
    $myUser->validatePassword($usuario,$contraseña);

?> <a href="formulario.html"><h1>Volver al inicio</h1></a>