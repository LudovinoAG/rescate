<?php
session_start();

$serverName = "989J4V1\SQLAGENTS"; //serverName\instanceName

// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array( "Database"=>"datatmk");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

$agente = $_SESSION['nombre'];
$osadia = $_POST['txtOS'];
$cliente = $_POST['txtCliente'];
$ban = $_POST['txtBan'];
$mac = $_POST['txtMac'];
$solucion = $_POST['lstSolucion'];
$txtFecha_Orden = $_POST['txtFecha_Orden'];
$comentario = $_POST['txtSeguimiento'];
$fechaRegisto = date("d/m/Y");
$horaRegistro = date("h:i:sa");

if( $conn ) {
    $sql = "INSERT INTO registros (agente, os, cliente, ban, mac, resolucion, fecha_orden,
     Estado_1, fecha_registro, hora_registro  )
     VALUES ('" .$agente. "','" .$osadia. "','" .$cliente. "','" .$ban. "','" .$mac. "','" .$solucion. "','" 
     .$txtFecha_Orden. "','" .$comentario. "','" .$fechaRegisto.  "','" .$horaRegistro.  "')";

    $stmt = sqlsrv_query($conn, $sql);

    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }else{
        header('Location: http://989j4v1:81/rescate/receive');
        //echo '<script> alert("registro guardado"); </script>';
    }

}else{
    echo "Conexión no se pudo establecer.<br />";
    die( print_r( sqlsrv_errors(), true));
}

?>