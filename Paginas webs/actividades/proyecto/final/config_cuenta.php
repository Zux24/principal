<?php 
   session_start(); 
   error_reporting(0);
   $usuario= $_SESSION['user'];
   //Conexion:()
    $conexion = mysql_connect("localhost", "root", "");
    mysql_select_db ("proyecto");    
?>
<!DOCTYPE html>
<html lang = "es"> <!--Pagina de inicio-->
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="styles/style_index.css">
		<link rel="icon" type="image/ico" href="img/iconos3.png"/>
		<title>ajustes</title>

		<!--JavaScript-->
		<script type="text/javascript">

		</script>
	</head>
	<body>
		<!--Encabezado: -->
		<div id="encabezado">
			<!--Logo-->
			<a href="index.php">
				<div class="logo">
					<h2 id="l1">Deco Terra</h2>
				</div>
			</a>
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
					echo "<div id=\"logeo\">";
					echo "Usuario: ".$usuario."<br>";
					echo "	<a href=\"config_cuenta.php\"> Perfil cuenta </a><br>";	
					echo "<a href=\"seccion_compras.php\"> Ver Carro </a><br>";
					echo "<form  action=\"index.php\" method=\"post\">";
					echo "<input type=\"submit\" name=\"cerrar\" value=\"Cerrar Sesion\"/><br>";
					echo "</form>";
					echo "</div>";
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
				<a class="link" href="seccion_infantil.php">Niños</a>
				<a class="link" href="seccion_contactos.php">Contactos</a>
				<a class="carro" href="seccion_compras.php"> <img id="carro" src="img/cart.png"> </a>
			</nav>
		</div>
		<!--Contenido: -->
		<div id="contenido">
			<?php
				$sql=mysql_query("SELECT * FROM usuarios WHERE Usuario=\"$usuario\"", $conexion);
				while($fila=mysql_fetch_array($sql)){
					$nom = $fila[Nombre];
					$ap = $fila[Apellido];	
					$mail = $fila[Correo];
				} 
				echo "<fieldset class=\"datos\">";
				echo "<legend> Datos de la Cuenta </legend>";

				echo "<form action=\"config_cuenta.php\" method=\"post\">";
				echo "Usuario: &nbsp&nbsp&nbsp&nbsp".$usuario."&nbsp&nbsp&nbsp&nbsp<input type=\"text\" name=\"us\">&nbsp&nbsp";
				echo "<input type=\"submit\" name=\"ru\" value=\"Cambiar\"/><br>";
				echo "</form>";
				if (isset($_POST['ru'])){
					$u= $_POST['us'];
					$sql=mysql_query("UPDATE usuarios set Usuario=\"$u\" WHERE Usuario=\"$usuario\"", $conexion);
					$_SESSION['user'] = $u;
					header("Location:config_cuenta.php");
				}

				//Cambiar nombre:
				echo "<form action=\"config_cuenta.php\" method=\"post\">";
				echo "Nombre: &nbsp&nbsp&nbsp&nbsp".$nom."&nbsp&nbsp&nbsp&nbsp<input type=\"text\" name=\"nomb\">&nbsp&nbsp";
				echo "<input type=\"submit\" name=\"rn\" value=\"Cambiar\"/><br>";
				echo "</form>";
				if (isset($_POST['rn'])){
					$n= $_POST['nomb'];
					$sql=mysql_query("UPDATE usuarios set Nombre=\"$n\" WHERE Usuario=\"$usuario\"", $conexion);
					header("Location:config_cuenta.php");
				}
				//Cambiar apellido
				echo "<form action=\"config_cuenta.php\" method=\"post\">";
				echo "Apellido: ".$ap."&nbsp&nbsp&nbsp&nbsp<input type=\"text\" name=\"apl\">&nbsp&nbsp&nbsp&nbsp";
				echo "<input type=\"submit\" name=\"ra\" value=\"Cambiar\"/><br>";
				echo "</form>";
				if (isset($_POST['ra'])){
					$a= $_POST['apl'];
					$sql=mysql_query("UPDATE usuarios set Apellido=\"$a\" WHERE Usuario=\"$usuario\"", $conexion);
					header("Location:config_cuenta.php");
				}
				//Cambiar correo
				echo "<form action=\"config_cuenta.php\" method=\"post\">";
				echo "Correo electronico: ".$mail."&nbsp&nbsp&nbsp&nbsp<input type=\"text\" name=\"email\">&nbsp&nbsp&nbsp&nbsp";
				echo "<input type=\"submit\" name=\"rm\" value=\"Cambiar\"/><br>";
				echo "</form>";
				if (isset($_POST['rm'])){
					$e= $_POST['email'];
					$sql=mysql_query("UPDATE usuarios set Correo=\"$e\" WHERE Usuario=\"$usuario\"", $conexion);
					header("Location:config_cuenta.php");
				}
				//Cambiar clave
				echo "<form action=\"config_cuenta.php\" method=\"post\">";
				echo "Clave: &nbsp&nbsp&nbsp&nbsp<input type=\"password\" name=\"key\">&nbsp&nbsp&nbsp&nbsp";
				echo "<input type=\"submit\" name=\"rk\" value=\"Cambiar\"/><br>";
				echo "</form>";
				if (isset($_POST['rk'])){
					$k= $_POST['key'];
					$sql=mysql_query("UPDATE usuarios set Clave=\"$k\" WHERE Clave=md5(\"$usuario\")", $conexion);
					header("Location:config_cuenta.php");
				}
				echo "</fieldset>";

				echo "<fieldset class=\"datos\">";
				echo "<legend> Compras </legend>";
				echo "</fieldset>";
				mysql_close($conexion);
			?>
		</div>
		<!--Footer-->
		<div id="footer">

		</div>
	</body>
</html>