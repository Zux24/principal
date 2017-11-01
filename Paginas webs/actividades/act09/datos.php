<?php
	define ("DB_HOST","192.168.4.18"); 
	define ("DB_USER","lmrozasg"); 
	define ("DB_PASSWORD","1234"); 
	define ("DB_DATABASE","lmrozasg"); 
  	//Conexion a la Base de Datos
  	$db= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

	$sql = "SELECT * FROM usuarios";

	$res = mysql_query($sql, $db);

	$salida = "[";
	while ($fila = mysql_fetch_object($res)) {
		
		if($salida != "["){
			$salida .=",";
		}

		$salida .= '{"nombre":"'.$fila->nombre.'",';
		$salida .= '"ciudad":"'.$ciudad->ciudad.'"}';
	}
	$salida .= "]";
	echo $salida;
?>