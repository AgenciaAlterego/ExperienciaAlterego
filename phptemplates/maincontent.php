
<?php if (!isset($_SESSION['datos_usuario'])) {
    // si entra acá quiere decir que no está logueado (osea, no hay data en la sesión)
    ?>

<section id="sectionLogin" class="AecolorBlanco">
    <h1 class="titulo-login-primeralinea">Te damos la bienvenida a</br>
    <strong class="titulo-login-segundalinea">Experiencia Álterego</strong></h1>

    <article id="login">               
        <form action="./phpfunctions/login.php" method="POST">
            <!--<label for="username">Correo electrónico</label> -->
            <input type="email" name="username" id="username" placeholder="Correo" required>
            <!--<label for="password">Contraseña</label> -->
            <input type="password" name="password" id="password" placeholder="Contraseña" required>
            <button type="submit">Entrar</button>
        </form>    
    </article>
    <article id="registrar">

    </article>
</section>
<?php
}else{
    // si entra acá quiere decir que hay data en la sesión, y que el user está logeado
    ?>
<section id="estacion3d" class="estacion AecolorGrisClaro">
            <h1 class="titulo-estacion">Estación #1 <br> 3D</h1>
            <a href="#" id="next-titulo-estacion-3d"><i class="fas fa-chevron-right"></i></a>
        </section>
        <section id="estacionPostprod" class="hidden estacion">
            <h1 class="titulo-estacion">Estación #2 <br>Postproducción<br>y Motion Gráphics</h1>
            <a href="#"><i class="fas fa-chevron-right"></i></a>
        </section>
        <section id="estacionDiseno" class="hidden estacion">
            <h1 class="titulo-estacion">Estación #3 <br>Diseño<br>e Ilustración</h1>
            <a href="#"><i class="fas fa-chevron-right"></i></a>
        </section>
        <section id="estacionWeb" class="hidden estacion">
            <h1 class="titulo-estacion">Estación #4 <br>Webs, Aplicaciones<br>y Juegos</h1>
            <a href="#"><i class="fas fa-chevron-right"></i></a>
        </section>
        <section id="estacionCampana" class="hidden estacion">
            <h1 class="titulo-estacion">Estación #5 <br>Campaña<br>Publicitaria</h1>
            <a href="#"><i class="fas fa-chevron-right"></i></a>
        </section>
        <section id="estacionManifiesto" class="hidden estacion">
            <h1 class="titulo-estacion">Estación #6 <br>Manifiesto y Reel</h1>
            <a href="#"><i class="fas fa-chevron-right"></i></a>
        </section>

<?php
}
?>

