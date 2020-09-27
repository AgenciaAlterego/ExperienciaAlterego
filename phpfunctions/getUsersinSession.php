<?php


$deMatchSesion = array();


// Tomo la sesión en la que estamos
if (isset($_GET['ae_id_sesion'])){
    $deMatchSesion['elFuckingGET'] = $_GET['ae_id_sesion'];
    $ae_id_sesion = $_GET['ae_id_sesion'];
}

/*
**************** Conecto y hago la query
*/

require '../configs/conexion.php';


// Armo la query
if (isset($ae_id_sesion)){
    $query = "SELECT * FROM ae_users WHERE id_sesion_actual = '$ae_id_sesion'";
    $resultadoQuery = mysqli_query($conexion, $query);

    
    if ($resultadoQuery){
        // Quiere decir que se pudo conectar
        $dataQuery = mysqli_fetch_assoc($resultado);

        $arrayForEncoding = array();
        $i = 0;

        while($dataQuery){
            //Encontró un usuario en esta sesión en la tabla
            // Recordatorio: dataQuery es un array asociativo que tiene como claves lo  campos de la db
            // Lo voy guardando en un array

            $arrayForEncoding[$i] =  $dataQuery;
            $i++;
        }

        // parseo el array y lo guardo en una var
        $encoded_string = json_encode($arrayForEncoding);

        ?>
            <!-- Me guardo este array en una var de js -->
            <script> 
                var aSessionUsersData = <?php $encoded_string ?>;
            </script>
        <?php

    }
}else{
    $deMatchSesion['GetSesion'] = 'No encontré id de sesión, no pude avanzar';

}

if (count($deMatchSesion) > 0){
    // Si $delogin es máyor a 0, quiere decir que hubo errores y se cargaron en este array.
    // Me llevo los errores en $errores
    $errores['matchSesion'] = $deMatchSesion;
}else{
    $errores['matchSesion'] = null;
}


// Guardo los errores en la sesión
$_SESSION['errores'] = $errores;

// Cierro la conexión
require '../configs/cerrarconexion.php';