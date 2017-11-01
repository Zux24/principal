<?php 
   session_start(); 
   error_reporting(0);
   $usuario= $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang = "es"> <!--Pagina de inicio-->
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="styles/style_index.css">
		<link rel="icon" type="image/ico" href="img/iconos3.png" />
		<title>infantiles</title>

		<!--JavaScript-->
		<script type="text/javascript">

		</script>
	</head>
	<body>
		<!--Encabezado: -->
		<div id="encabezado">
			<!--Logo-->
			<div class="logo">
				<h2 id="l1">Muebles Todo Hogar</h2>
			</div>
			<!--Inicio de sesion: -->
			<?php

				if ($usuario==""){ // SI NO EXISTE UN USUARIO CONECTADO:
					echo "<div id=\"logear\">";
					echo "	<form id=\"logeo\" method=\"post\" action=\"login.php\">";	
					echo "		Usuario: <br>";		
					echo "		<input type=\"text\" name=\"user\"/><br>";		
					echo "		Clave: <br>";
					echo "		<input type=\"password\" name=\"clave\"/><br>";
					echo "		<input type=\"submit\" value=\"Entrar\"/>";		
					echo "		<button> <a href=\"crear_cuenta.php\">Crear Cuenta</a> </button>";		
					echo "	</form>";		
					echo "</div>";	
				}	
				else{ // SI EXISTE USUARIO CONECTADO:
					echo "<div id=\"logear\">";
					echo "	<div id=\"logeo\">";
					echo "		Usuario: ".$usuario."<br>";
					echo "		<a href=\"config_cuenta.php\"> Perfil cuenta </a><br>";	
					echo "		<a href=\"seccion_compras.php\"> Ver Carro </a><br>";
					echo "		<form  action=\"index.php\" method=\"post\">";
					echo "			<input type=\"submit\" name=\"cerrar\" value=\"Cerrar Sesion\"/><br>";
					echo "		</form>";
					echo "	</div>";
					echo "</div>";
				}

				if (isset($_POST['cerrar'])){
					session_destroy();
				}
			?>	

		</div>
		<!--Menu:-->
		<div id="menu">
			<nav> <!--Navegador o menu de la pagina: -->
				<a class="link" href="index.php">Inicio</a>
				<a class="link" href="seccion_mascotas.php">Mascotas</a>
				<a class="link" href="seccion_decohogar.php">Decohogar</a>
				<a class="marcador" href="seccion_infantil.php">Niños</a>
				<a class="link" href="seccion_contactos.php">Contactos</a>
				<a class="carro" href="seccion_compras.php"> <img id="carro" src="img/cart.png"> </a>
			</nav>
		</div>
		<!--Contenido: -->
		<div id="contenido">
			<fieldset class="datos">
				<legend> Juguetes </legend>
					<img id="in" src="img/infantiles/juguetes/1.jpg">
					<img id="in" src="img/infantiles/juguetes/2.jpg">
					<img id="in" src="img/infantiles/juguetes/3.jpg">
					<img id="in" src="img/infantiles/juguetes/4.jpg">
			</fieldset>
			<fieldset class="datos">
				<legend> Cunas </legend>
					<img id="in" src="img/infantiles/dormitorios/1.jpg">
					<img id="in" src="img/infantiles/dormitorios/2.jpg">
					<img id="in" src="img/infantiles/dormitorios/7.jpg">
					<img id="in" src="img/infantiles/dormitorios/6.jpg">
			</fieldset>
			<fieldset class="datos">
				<legend> Muebles </legend>
					<img id="in" src="img/infantiles/muebles/4.jpg">
					<img id="in" src="img/infantiles/muebles/1.jpg">
					<img id="in" src="img/infantiles/muebles/7.jpg">
					<img id="in" src="img/infantiles/muebles/14.jpg">
			</fieldset>
		</div>
		<!--Footer-->
		<div id="footer">

		</div>
	</body>
</html>