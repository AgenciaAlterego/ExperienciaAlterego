<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencia Álterego - Lobby de acceso</title>
    <link rel="shortcut icon" href="./imgs/favicon-01.png" type="image/x-icon">

    <link rel="stylesheet" href="./css/keyframing.css">
    <link rel="stylesheet" href="./css/generalidades.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/estilos-lobby.css">

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
    include './phptemplates/header.php';
    include './phptemplates/paneldenotificaciones.php';
    include './phptemplates/asidemenuhamburguesa.php';
    include './phptemplates/siderlateral.php';

?>

    <main id="lobby-main">
        <p><img src="./imgs/isotipo_ae-white.svg" alt="Isotipo Álterego" title="Álterego"></p>
        <h1 class="AecolorBlanco">Experiencia Álterego</h1>
        
        <section id="lobby-intro">
            <p class="AecolorBlanco lobby-texto-descriptivo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi praesentium ipsam harum ut temporibus
                natus
                ipsa aut error iusto quam? Error explicabo minima minus rerum, cumque velit magnam et quod.</p>
            <a href="#" onclick="entrarAlLobby()" id="lobby-intro-ir-a-sala-de-espera">
                <p>Ir a la sala de espera</p>
            </a>
        </section>
        
        <section id="lobby-people" class="AecolorBlanco hidden">
        <p>Esperando a que el administrador comience la experiencia...</p>
        </section>

    </main>





    <?php    
    include './phptemplates/footer.php';
    ?>


    <script src="js/vars.js"></script>
    <script src="js/codigo.js"></script>

</body>

</html>