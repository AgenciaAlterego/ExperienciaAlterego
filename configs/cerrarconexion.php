<?php


if ($ae_id_sesion != ''){
    $url_redireccion = "Location: ../lobby.php?ae_id_sesion=" . $ae_id_sesion;
}else{
    $url_redireccion = "Location: ../index.php";
}

mysqli_close($conexion);
header($url_redireccion);