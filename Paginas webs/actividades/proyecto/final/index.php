<?php 
   session_start(); 
   error_reporting(0);
   $usuario= $_SESSION['user'];
   $tipousuario= $_SESSION['admi'];
?>
<!DOCTYPE html>
<html lang = "es"> <!--Pagina de inicio-->
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="styles/style_index.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<link rel="icon" type="image/ico" href="img/iconos3.png" />
		<title>Inicio</title>
		<!--JQuery-->
		<script>
			$(document).ready(principal);

			function principal(){
				$("#in").click(info); 
			}
			function info(){
				alert("funcionaa");
				$("#infomascotas").show();
			        //$.ajax({url: "info.txt", 
			        		 //success: function(result){ $("#infomascotas").html(result);
			        		//}});
			}
		</script>
		<!--JavaScript-->
		<script type="text/javascript">
  			function Validar(){ //Verifica si se ha escrito la clave y contraseña:
      			if(document.getElementById("nk").value == "") { //Usuario
         			alert("Debes escribir un nombre para tu cuenta.");
         			document.getElementById("nk").focus();
         			return false;
     	  	    }
     	  	    if(document.getElementById("k").value == "") { 
         			alert("Debes escribir tu clave.");
         			document.getElementById("k").focus();
         			return false;
     	  	    }

      			return true;
  		    }
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
					echo "		<input id=\"nk\" type=\"text\" name=\"user\"/><br>";		
					echo "		Clave: <br>";
					echo "		<input id=\"k\" type=\"password\" name=\"clave\"/><br>";
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
				<a class="marcador" href="index.php">Inicio</a>
				<a class="link" href="seccion_mascotas.php">Mascotas</a>
				<a class="link" href="seccion_decohogar.php">Decohogar</a>
				<a class="link" href="seccion_infantil.php">Niños</a>
				<a class="link" href="seccion_contactos.php">Contactos</a>
				<a class="carro" href="seccion_compras.php"> <img id="carro" src="img/cart.png"> </a>
			</nav>
		</div>
		<!--Contenido: -->
		<div id="contenido">
			<fieldset class="datos" id="mascotas">
				<legend> Mascotas </legend>
				<?php			
					$conexion = mysql_connect("localhost", "root", "");
				    mysql_select_db ("proyecto");  
					$a = "SELECT imagen FROM fotos Where categoria='Mascotas'"; 
					$res = mysql_query($a,$conexion);
					while($fila=mysql_fetch_array($res)){
						$c = $fila['imagen'];
						echo "<img id=\"in\" src=\"img/mascotas/$c\">";
						}
					?>
			</fieldset>
			<div id="infomascotas">

			</div>	
			<center>
			<div id="addfoto"> <!--Agregar imagen a carpeta: -->
				<!--Subir archivos: -->
				<form id="fupload" action="upload.php" method="post" enctype="multipart/form-data">
					<input name="archivo" type="file"/><br>
					<input id="boton3" name="Enviar" type="submit" value="Subir archivo"/>
				</form>
			</div>
			</center>
			
			<fieldset class="datos">
				<legend> Decohogar </legend>
					<img id="in" src="img/decohogar/2.jpg">
					<img id="in" src="img/decohogar/1.jpg">
					<img id="in" src="img/decohogar/6.jpg">
			</fieldset>
			<fieldset class="datos">
				<legend> Categoria Infantil </legend>
					<img id="in" src="img/infantiles/juguetes/2.jpg">
					<img id="in" src="img/infantiles/juguetes/1.jpg">
					<img id="in" src="img/infantiles/juguetes/3.jpg">
					<img id="in" src="img/infantiles/1.jpg">
					<img id="in" src="img/infantiles/dormitorios/1.jpg">
			</fieldset>
		</div>
		<!--Footer-->
		<div id="footer">

		</div>
	</body>
</html>