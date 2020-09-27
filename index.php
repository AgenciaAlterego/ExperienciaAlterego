<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencia Álterego</title>
    <link rel="shortcut icon" href="./imgs/favicon-01.png" type="image/x-icon">

    <link rel="stylesheet" href="./css/keyframing.css">
    <link rel="stylesheet" href="./css/generalidades.css">
    <link rel="stylesheet" href="./css/estilos.css">

    <?php require './configs/config.php'; ?>

    <script src="https://kit.fontawesome.com/635234d3c3.js" crossorigin="anonymous"></script>

</head>

<body id="body">
    <div id="backgroundSupport" class="BackgroundAecolorNegro">
    </div>

    <!-- 
****************************************
Ver que hacer y donde dejar esto
(mensajes de error)
****************************************
 -->

 <?php    
    include './phptemplates/paneldenotificaciones.php';


    include './phptemplates/header.php';
    include './phptemplates/asidemenuhamburguesa.php';

 
    //include './phptemplates/siderlateral.php';

    echo '<main>';




    require './phptemplates/maincontent.php';




    echo '</main>';

    include './phptemplates/footer.php';
    ?>


    <script src="js/vars.js"></script>
    <script src="js/codigo.js"></script>

</body>

</html>