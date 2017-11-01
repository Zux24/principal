<?php			
	$conexion = mysql_connect("localhost", "root", "");
    mysql_select_db ("proyecto");  
	$a = "SELECT imagen FROM fotos Where categoria='Mascotas'"; 
	$res = mysql_query($a,$conexion);
	while($fila=mysql_fetch_array($res))
		$c = $fila['imagen'];
		echo "$c";
		echo "<img id=\"in\" src=\"img/mascotas/$c\">";
	?>