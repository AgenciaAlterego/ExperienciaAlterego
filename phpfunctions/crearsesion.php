<?php

$query = "INSERT INTO ae_sessions (session_stage, session_finished) VALUES (0, false)";

$resultado = mysqli_query($conexion, $query);

if(! $resultado ) {
    //No funcionó la query
    //hubo errores, lo cargo para visualizar en el front
    $errores['sesion'] = $resultado;
    die('No se pudo crear la sesión: ' . mysql_error());

 }else{
     // EL insert funcionó, ahora tengo que averiguar que id generó 
    
    $query = "SELECT * FROM ae_sessions";
    $resultado = mysqli_query($conexion, $query);
    if($resultado){
        // No falló la consulta.
        do{
            $fila = mysqli_fetch_assoc($resultado);
            if($fila != null){
                //Guardo los datos de sesión en la varialbe $_Session
                $_SESSION['datos_sesion'] = $fila;
                //Me guardo el id de sesión
                $ae_id_sesion = $fila['idae_session'];
            }
        }while($fila != null);


        // Guardo el id de la sesión en el usuario en la BD
        // Armo la query
        $query = "UPDATE ae_users SET id_sesion_actual = " . $ae_id_sesion . " WHERE idae_users = ". $data['idae_users'];
        $resultadoUpdate = mysqli_query($conexion, $query);

        if(!$resultadoUpdate){
            // Hubo problemas en el update
            // lo registro en los errores
            $errores['updateSesion'] = "Se creó la sesión pero no pudimos agregar el id de sesión en el usuario, en la BD";
        }

        // Asigno rol admin al usuario
        $_SESSION['datos_usuario']['rol'] = 'admin';


    }
 }