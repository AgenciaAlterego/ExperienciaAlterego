<?php
session_start();
$local = true;

$errores = array();

if ($local){
    $serverip = 'localhost';
    $serverusr = 'root';
    $serverpass = '';
} elseif (!$local) {
    # code...
}