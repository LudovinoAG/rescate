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
    <title>Rescate - Recepción</title>
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

    <section class='contenido_recepcion'>
        <div class='row'>
            <div class='col-lg-12'>
          
                    <h4> RECEPCION</h4>
                    <form action="save_rescate.php" method='post' >
                        <div class='row'>
                            <div class='col-lg-12'>
                                <div class='form-group'>
                                    <label for="txtOS">Osadia
                                        <input type="text" class='form-control' size='6' maxlength='6' id='txtOS' name='txtOS' />
                                    </label>

                                    <label for="txtCliente">Cliente
                                        <input type="text" class='form-control' size='30' maxlength='70' id='txtCliente' name='txtCliente' />
                                    </label>

                                    <label for="txtBan">BAN
                                        <input type="text" class='form-control' size='9' maxlength='9' id='txtBan' name='txtBan' />
                                    </label>

                                    <label for="txtMac">MAC
                                        <input type="text" class='form-control' size='2' maxlength='2' id='txtMac' name='txtMac' />
                                    </label>
                                    <label for="txtSolucion">Solución
                                        <select class='form-control' name="lstSolucion" id="lstSolucion">
                                            <option value="0">[Elegir una]</option>
                                            <option value="Completada">Completada</option>
                                            <option value="Enviar a cancelar">Enviar a cancelar</option>
                                            <option value="Enviar a Reactivar">Enviar a Reactivar</option>
                                            <option value="Validar la llamada">Validar la llamada</option>
                                            <option value="No contacto">No Contacto</option>
                                            <option value="Despacho normal">Despacho normal</option>
                                            <option value="Orden cancelada">Orden cancelada</option>
                                            <option value="Averia">Orden Averia</option>
                                            <option value="Pendiente a Cliente">Pendiente a Cliente</option>
                                        </select>
                                    </label>
                                    <label for="txtFecha_Orden">Fecha orden
                                        <input type="date" class='form-control' id='txtFecha_Orden' name='txtFecha_Orden' />
                                    </label>
                                </div>

                                <div class='form-group'>
                                    <label for="txtSeguimiento"> Comentario
                                        <textarea class='form-control' name="txtSeguimiento" id="" cols="60" rows="3" id='txtSeguimiento'></textarea>
                                    </label>
                                </div>
                                <br>
                                <div class='form-group'>
                                    <button type='submit' id='btnEnviar' class='btn btn-success btn-sm'>Registrar</button>
                                    <button type='reset' id='btnLimpiar' class='btn btn-danger btn-sm'>Limpiar</button>
                                </div>

                            </div>
                        </div>

                    </form>




                    <br>
                    <br>
                    <?php
                        include_once('list.php');
                    ?>
            
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