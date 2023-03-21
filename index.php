<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Rescate - INICIO</title>
</head>
<body>
<div class='container'>
    <div class='row encabezado'>
        <div class='col-lg-8'>
            <div class='div_logo'>
                <img src="pics/rescate.jpg" alt="">
                <span class='titulo_1'>Data </span><span class='titulo_2'>RESCATE TMK</span>
                <span class='texto_titulo'>Control de casos para Reventa</span>
            </div>
        </div>

        <div class='col-lg-4 top_info'>
            <div>
                <span><?php echo $_SESSION["nombre"];  ?> <a href="cerrar.php">[Cerrar sesión]</a></span>
                <br>
                <span><?php echo date("l, d F Y"); ?></span>
            </div>
        </div>
    </div>

    <nav>
        <ul>
            <?php
                if($_SESSION["perfil"]=='1'){ 
            ?>
                <li><a href="index.php"> Inicio</a></li>
                <li><a href="receive.php"> Recepción</a></li>

            <?php }else{ ?>
                <li><a href="index.php"> Inicio</a></li>
                <!-- <li>Estadisticas</li> -->
                <li><a href="manten.php"> Reportes</a></li>
            <?php } ?>
        </ul>
    </nav>

    <section>
        <div class='row'>
            <div class='col-lg-8'>
                <div class='contenido_inicio'>
                    <h4> INICIO</h4>
                    <p>
                    </p>
                    <p>
                    </p>
                    <p>
                    </p>
                    <p>
                    </p>
                    <p>
                    </p>
                    <p>
                    </p>
                    <p>
                    </p>
                    <p>
                    </p>
                </div>
            </div>

            <div class='col-lg-4'>
                <aside class='contenido_inicio_aside'>
                        <p>

                        </p>
                        <p>

                        </p>
                        
                        
                </aside>
            </div>
        </div>
    </section>

    <footer>
        <div class='row'>

            <div class='col-lg-8'>
                <p class='derechos'>Claro Telermecadeo - Todos los derechos reservados 2021</p>
            </div>

            <div class='col-lg-4'>
                <p class='firma'>Desarrollado por: Ludovino Guzmán</p>
            </div>

        </div>
    </footer>

</div>

<script src="js/app.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>