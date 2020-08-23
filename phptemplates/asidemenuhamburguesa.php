<?php if (isset($_SESSION['datos_usuario'])) {
    // No se muestra si no está logueado.
    ?>
    <div id="asidebackground" class="hidden">
    </div>
    <aside id="aside" class="hidden BackgroundAecolorGrisOscuro AecolorGrisClaro">
        <a href="#"><i class="fas fa-times"></i></a>
        <img src="<?php echo $_SESSION['datos_usuario']['avatar'] ?>" alt="perfil usuario actual">
        <p><?php echo 'Bienvenido ' . $_SESSION['datos_usuario']['nombre'] . ' ' . $_SESSION['datos_usuario']['apellido'] ?></p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos beatae harum sed aliquid id nemo ab
            nam
            minus soluta at rerum sint, debitis provident aperiam neque. Saepe esse vel magnam.</p>
            <form action="./phpfunctions/logout.php" method="POST" id="logout">
            <button type="submit">Cerrar sesión</button>
            </form>
    </aside>
<?php
}
?>