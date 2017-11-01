<?php
	//Agregar imagen a la carpeta correspondiente
	$siz = $_FILES [ "archivo" ] [ 'size' ];
	$typ = $_FILES [ "archivo" ][ 'type'];
	$archivo = $_FILES [ "archivo"] ['name'];
	if ( $archivo != "" ) {
 	$destino = "img/mascotas/". $archivo;
	 if ( copy ($_FILES ['archivo' ][ 'tmp_name'], $destino) ) 
		$status = "Archivo subido: <b>".$archivo. "</b>";
	else $status = "Error al subir el archivo";
	} 
	else $status = "Error al subir archivo";
	//header("Location:index.php");
	echo $archivo;
	//Conexion
    $conexion = mysql_connect("localhost", "root", "");
    mysql_select_db ("proyecto");  

    //Buscar Usuario:
    $sql=mysql_query("INSERT INTO fotos(imagen,categoria) VALUES(\"$archivo\",'Mascotas')", $conexion);
   
?>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
		<link rel="stylesheet" href="styles/style.css" type="text/css">
		<title>Upload</title>
	</head>
	<body >
		<div >
		<?php
			echo $status;
		?>
		<form action="index.php" method="post">
			<input name="volver" type="submit" value="atras"/>
		</form>
		</div>
		<?php
			if(isset($_POST['volver'])){
				
			}
		?>
	</body>
</html>
