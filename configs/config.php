<?php
session_start();
$ambiente = 'lab';

$errores = array();

if ($ambiente = 'local'){
    $serverip = 'localhost';
    $serverusr = 'root';
    $serverpass = '';
} elseif ($ambiente = 'lab') {
    $serverip = 'freedb.tech:3306';
    $serverusr = 'freedb_alterego';
    $serverpass = 'AmeScuffiVallaro';
}elseif ($ambiente = 'prod'){
    # code...
}