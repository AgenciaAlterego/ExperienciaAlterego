<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencia Álterego</title>
    <link rel="shortcut icon" href="./imgs/favicon-01.png" type="image/x-icon">

    <link rel="stylesheet" href="./css/keyframing.css">
    <link rel="stylesheet" href="./css/generalidades.css">
    <link rel="stylesheet" href="./css/estilos.css">s


    <script src="https://kit.fontawesome.com/635234d3c3.js" crossorigin="anonymous"></script>

</head>

<body id="body" class="BackgroundAecolorNegro">
    <div id="backgroundSupport">
    </div>
    
<?php
include './phptemplates/header.php';
include './phptemplates/asidemenuhamburguesa.php';

include './phptemplates/siderlateral.php';

echo '<main>';


require './phptemplates/maincontent.php';




echo '</main>';

include './phptemplates/footer.php';
?>