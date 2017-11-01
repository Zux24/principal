<?php
	$siz = $_FILES [ "archivo" ] [ 'size' ];
	$typ = $_FILES [ "archivo" ][ 'type'];
	$archivo = $_FILES [ "archivo"] ['name' ];
	if ( $archivo != "" ) {
 	$destino = "img/". $archivo;
	 if ( copy ($_FILES ['archivo' ][ 'tmp_name'], $destino) ) 
		$status = "Archivo subido: <b>".$archivo. "</b>";
	else $status = "Error al subir el archivo";
	} 
	else $status = "Error al subir archivo";
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
		<form action="upload.php" method="post">
			<input name="volver" type="submit" value="atras"/>
		</form>
		</div>
		<?php
			if(isset($_POST['volver'])){
				header("Location:menu.php");
			}
		?>
	</body>
</html>