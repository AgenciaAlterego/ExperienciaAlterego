<?php


$deLogIn = array();
$ae_id_sesion = '';

/*
**************** Obtengo los datos del formulario de login 
*/
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
**************** Si hay errores acarreados, que rompa antes de hacer la query
*/
if (count($deLogIn) > 0){
    $errores['login'] = $deLogIn;
    $_SESSION['errores'] = $errores;

    header('Location: ../index.php');
    exit;
}



// Me fijo si su url tiene algún id de sesión para conectarlo directamente ahí
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! para debug:
$deLogIn['elFuckingGET'] = $_GET['ae_id_sesion'];
if (isset($_GET['ae_id_sesion'])){
    $ae_id_sesion = $_GET['ae_id_sesion'];
}



/*
**************** Conecto y hago la query
*/

require '../configs/conexion.php';

/* 
Incluir más adelante, para encriptar la contraseña
(En etapas de prueba se está trabajando con una contraseña no encriptada)
$contrasena = md5($contrasena);
*/

// Armo la query
$query = "SELECT * FROM ae_users WHERE correo = '$usuario' AND contrasena = '$contrasena'";


$resultado = mysqli_query($conexion, $query);

if ($resultado){
    // Quiere decir que encontró al usuario en la tabla
    $data = mysqli_fetch_assoc($resultado);
    // Recordatorio: data es un array asociativo que tiene como claves lo  campos de la db
    $_SESSION['datos_usuario'] = $data;


    // En caso de que el usuario nos haya enviado por get un id de sesión, tengo qué:
    // Guardarlo en los datos de usuario obtenidos
    // Cargarlo en la BD
    
    if ($ae_id_sesion != ''){

        // Armo la query para cargarlo en la DB
        $query = "UPDATE ae_users SET id_sesion_actual = " . $ae_id_sesion . " WHERE idae_users = ". $data['idae_users'];
        $resultadoUpdate = mysqli_query($conexion, $query);

        if($resultadoUpdate){
            //Pude guardar bien el dato del id en la tabla
            // Guardo la sesión en los datos de usuario en el front
            $_SESSION['datos_usuario']['id_sesion_actual'] = $ae_id_sesion;
        }else{
            // Hubo un problema en la query de update.
            // Rompo y mando el msj de error.
            $errores['updateSesion'] = 'No pudimos actualizar el n° de sesión en la información del usuario';
            // !!!!!!!!!!!!!!!!!!!!!!!!! Puede ser que me esté faltando romper para que no siga. 
        }
        

    }else{
        // Si entró acá, quiere decir que no había sesión para este usuario, hay que crear una nueva.
        // Tengo que asignarle a este usuario la primer sesión disponible y guardarlo en la bd
        // Tengo que traerme el número de sesión para guardarlo en los datos de login, del front
        // Acá también le asigno un rol de administrador al usuario
        require 'crearsesion.php'; 
    }


}else{
    // Bueno, si entró acá es porque no hay resultado de la query,
    // quiere decir que no existe un usuario con esta combinación
    $deLogIn['login'] = 'El correo o la contraseña son incorrectos';
}

if (count($deLogIn) > 0){
    // Si $delogin es máyor a 0, quiere decir que hubo errores y se cargaron en este array.
    // Me llevo los errores en $errores
    $errores['login'] = $deLogIn;
}else{
    $errores['login'] = null;
}

// Guardo los errores en la sesión
$_SESSION['errores'] = $errores;

// Cierro la conexión
require '../configs/cerrarconexion.php';