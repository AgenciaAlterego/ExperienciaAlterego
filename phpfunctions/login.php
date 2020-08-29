<?php


$deLogIn = array();


if (!isset($_POST['username'])){
    $deLogIn['username'] = 'Falta nombre de usuario';
}else{
    $usuario = $_POST['username'];
}

if (!isset($_POST['password'])){
    $deLogIn['password'] = 'Falta contraseña';
}else {
    $contrasena = $_POST['password'];
}

/*
Esto es para que rompa antes de hacer la query
*/
if (count($deLogIn) > 0){
    $errores['login'] = $deLogIn;
    $_SESSION['errores'] = $errores;

    header('Location: ../index.php');
    exit;
}

require '../configs/conexion.php';

/*$contrasena = md5($contrasena);
*/

$query = "SELECT * FROM ae_users WHERE correo = '$usuario' AND contrasena = '$contrasena'";

$resultado = mysqli_query($conexion, $query);

if ($resultado){
    $data = mysqli_fetch_assoc($resultado);
    //data es un array asociativo que tiene como claves lo  campos de la db
    $_SESSION['datos_usuario'] = $data;
}else{
    $deLogIn['login'] = 'El correo o la contraseña son incorrectos';
}

if (count($deLogIn) > 0){
    $errores['login'] = $deLogIn;
}else{
    $errores['login'] = null;
}

$_SESSION['errores'] = $errores;
require '../configs/cerrarconexion.php';