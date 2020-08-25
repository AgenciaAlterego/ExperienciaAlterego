<?php
session_start();
$ambiente = 'lab';

$errores = array();

if ($ambiente = 'local'){
    $serverip = 'localhost';
    $serverusr = 'root';
    $serverpass = '';
    $db = 'alterego-experiencia';
} elseif ($ambiente = 'lab') {
    $serverip = 'freedb.tech:3306';
    $serverusr = 'freedb_alterego';
    $serverpass = 'AmeScuffiVallaro';
    $db = 'freedb_dbtst';
}elseif ($ambiente = 'prod'){
    # code...
}