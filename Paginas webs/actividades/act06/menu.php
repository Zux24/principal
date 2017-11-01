<?php
	session_start();
	error_reporting(0);
	$usuario= $_SESSION['usuario'];
    $nom = $_SESSION['nombre'];
    if ($usuario==""){
    	header("Location:index.php");
    }
?>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
		<link rel="stylesheet" href="styles/style.css" type="text/css">
		<title>Menu</title>
	</head>
	<body>
		<div id="box">
			<h1>Menu</h1>	
			<div id="l"> 
			<?php 
			    //Imprimir el nick y nombre:
  				echo "Nickname: ".$usuario."<br>";
  				echo "Nombre completo: ".$nom."<br>";
  				//Boton de Cerrar sesion:
  				echo "<form action=\"menu.php\" method=\"post\">";
				echo "<input  id=\"boton2\" type=\"submit\" name=\"cerrar\" value=\"Cerrar sesion\"/><br>";
				echo "</form>";
				//destruir la sesion:
				if (isset($_POST['cerrar'])){
					session_destroy();
					header("Location:index.php");
				}
			?>
			</div>
			<div id="box_subir">
				<!--Subir archivos: -->
				<form id="fupload" action="upload.php" method="post" enctype="multipart/form-data">
					<input name="archivo" type="file"/><br>
					<input id="boton3" name="Enviar" type="submit" value="Subir un Archivo"/>
				</form>

			</div>
		</div>
	</body>
</html>