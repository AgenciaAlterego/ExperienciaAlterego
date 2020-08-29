<?php

require 'config.php';

$conexion = mysqli_connect($serverip, $serverusr, $serverpass, $db);

if (!$conexion){
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito en la conexión a la DB" . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;

?>