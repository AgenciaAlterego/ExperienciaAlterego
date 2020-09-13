<div class="errores">
        <?php if (isset($_SESSION['errores'])) {
            if (count($_SESSION["errores"]) != 0) { ?>
                <!-- <p><?php var_dump($_SESSION["errores"]); ?></p> -->
                <?php foreach ($_SESSION["errores"] as $valor) {

                    // Chequeo a ver si el registro dentro del arrary errores es un array por si mismo
                    // entonces, tengo que hacer otro recorrido
                    if (is_array($valor)) {
                        // quiere decir que hay otro array acá adentro

                        foreach ($valor as $valorInterno) {
                        ?>
                            <p class="error"><?php echo $valorInterno; ?></p>
                        <?php
                        }
                    }else{
                        // no hubo array interno, es error unitario
                        ?>
                        <p class="error"><?php echo $valor; ?></p>
                        <?php
                    
                    }
                }
            }
        }
        //A modo de debuggeo, para saber quien es el user
        if (isset($_SESSION['datos_usuario'])){
            ?>
            <p class="info"><strong>Datos de usuario:</strong><br><?php var_dump($_SESSION['datos_usuario']); ?></p>
            <?php
        }
        ?>
    </div>