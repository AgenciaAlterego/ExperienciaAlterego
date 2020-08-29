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
    console_log($serverip);

} elseif ($ambiente == 'lab') {
    $url = parse_url(getenv("DATABASE_URL"));
    $serverip = $url["host"];;
    $serverusr = $url["user"];
    $serverpass = $url["pass"];
    $db = substr($url["path"], 1);
    console_log($serverip);
/*
    $serverip = 'https://freedb.tech:3306';
    $serverusr = 'freedb_alterego';
    $serverpass = 'AmeScuffiVallaro';
    $db = 'freedb_dbtst';
  
*/}elseif ($ambiente = 'prod'){
    # code...
}