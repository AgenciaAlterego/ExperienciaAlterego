<?php
session_start();
$ambiente = getenv("AMBIENTE")? getenv("AMBIENTE") : 'local';
$errores = array();

require __DIR__ . '/../phpfunctions/utils.php';

console_log($ambiente);
console_log('Encontré env? ' . getenv("AMBIENTE"));


if ($ambiente == 'local'){
    $serverip = 'localhost';
    $serverusr = 'root';
    $serverpass = '';
    $db = 'alterego-experiencia';


} elseif ($ambiente == 'lab') {
    $url = parse_url(getenv("DATABASE_URL"));
    $serverip = 'https://freedb.tech:3306';
    $serverusr = 'freedb_alterego';
    $serverpass = 'AmeScuffiVallaro';
    $db = 'freedb_dbtst';
    
    /*
    $serverip =  $url["host"] . ":" . $url["port"];
    $serverusr = $url["user"];
    $serverpass = $url["pass"];
    $db = substr($url["path"], 1);*/
    console_log($url);
    console_log('server: ' . $serverip);
    console_log('usuario: ' . $serverusr);
    console_log('pass: ' . $serverpass);
    console_log('db: ' . $db);

/*
    $serverip = 'https://freedb.tech:3306';
    $serverusr = 'freedb_alterego';
    $serverpass = 'AmeScuffiVallaro';
    $db = 'freedb_dbtst';
  
*/}elseif ($ambiente == 'prod'){
    # code...
}


/*
BORRAR ESTA MIERDA:

En 000webhost
    $db = 'id14790087_alterego_experiencia';
    $serverusr = 'webhost_alterego';
    $serverpass = 'AmeScuffiVallaro1!';



En Freedb.Tech:
    $serverip = 'freedb.tech:3306';
    $serverusr = 'freedb_alterego';
    $serverpass = 'AmeScuffiVallaro';
    $db = 'freedb_dbtst';


*/