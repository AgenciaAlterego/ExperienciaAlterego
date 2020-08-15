<?php

$errores= [];

if (!isset($_POST['username'])){
    $errores['username'] = 'Falta nombre de usuario';
}else{
    $usuario = $_POST['username'];
}


if (!isset($_POST['password'])){
    $errores['password'] = 'Falta contraseña';
}else {
    $contrasena = $_POST['password'];
}

if (count($errores) > 0){
    $_SESSION['errores'] = $errores;

    header('Location: ../index.php');
    exit;
}


require 'conexion.php';

/*$contrasena = md5($contrasena);
*/

$query = "SELECT * FROM ae_users WHERE correo = $usuario AND contrasena = $contrasena";

$resultado = mysqli_query($conexion, $query);

if ($resultado){
    $data = mysqli_fetch_assoc($resultado);
    //data es un array asociativo que tiene como claves lo  campos de la db
    $_SESSION['datos_usuario'] = $data;
} else{
    //enviar un msj de error avisando que el usr no existe
}



require 'cerrarconexion.php';