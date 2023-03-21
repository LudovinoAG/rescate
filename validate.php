<?php

if(isset($_POST['txtUser'])){
	   
	   $usuario = $_POST["txtUser"];
   	   $password = $_POST["txtClave"];

	if($usuario=="" && $password=="" ){
		header('location: login.php');
	}else{
		$serverName = "989J4V1\SQLAGENTS"; 
        $connectionInfo = array( "Database"=>"datatmk");
        $conn = sqlsrv_connect( $serverName, $connectionInfo);
		
		$sql = "SELECT * FROM usuarios where tarjeta='$usuario' and clave='$password'";
		$LastUpdate = date('d/m/Y h:i:sa');
		$Update = "UPDATE usuarios SET ultimo_acceso='$LastUpdate' WHERE tarjeta='$usuario'";

		$stmt = sqlsrv_query($conn, $sql) or die ('No ejecutado');
		$resultUpdate = sqlsrv_query($conn, $Update) or die ('No ejecutado');
		
        $fila = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

		//$fila=mysqli_fetch_row($result);

		if($fila['id_usuarios']>0){
			session_start();
			$_SESSION["tarjeta"] = $fila['tarjeta'];
			$_SESSION["nombre"] = $fila['nombre'];
			$_SESSION["perfil"] = $fila['id_rol'];

			header("location: index.php");

		}else{

	     	header('location: login.php');

		}
		
		//mysqli_close($conexion);
        }

}else{
	header('location: login.php');
}


?>
