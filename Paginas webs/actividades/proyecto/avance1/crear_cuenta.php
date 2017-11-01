<!DOCTYPE html>
<html lang = "es"> <!--Pagina de inicio-->
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="styles/style_index.css">
		<link rel="icon" type="image/ico" href="img/iconos3.png" />
		<title>nueva cuenta</title>

		<!--JavaScript-->
		<script type="text/javascript">
   			function Validar(){ //Verifica si los datos siguientes existen:
      			if(document.getElementById("nk").value == "") { //Usuario
         			alert("Debes escribir un nombre para tu cuenta.");
         			document.getElementById("nk").focus();
         			return false;
     	  	    }
      			if(document.getElementById("nom").value == "") {  
         			alert("Debes escribir tu nombre.");
        			document.getElementById("nom").focus();
        		    return false;
      			}
      			if(document.getElementById("ap").value == "") { 
         			alert("Debes escribir tu apellido.");
         			document.getElementById("ap").focus();
         			return false;
     	  	    }
     	  	    if(document.getElementById("fn").value == "") { 
         			alert("Debes escribir tu fecha de nacimiento.");
         			document.getElementById("fn").focus();
         			return false;
     	  	    }
     	  	    if(document.getElementById("clave").value == "") { 
         			alert("Debes escribir tu clave.");
         			document.getElementById("clave").focus();
         			return false;
     	  	    }
     	  	    if(document.getElementById("clave2").value == "") { 
         			alert("Debes escribir confirmar tu clave.");
         			document.getElementById("clave2").focus();
         			return false;
     	  	    }
     	  	    //Verifica si la confirmacion de la contraseña es valida:
     	  	    if(document.getElementById("clave2").value != document.getElementById("clave").value) { 
         			alert("Tu clave esta mal escrita.");
         			document.getElementById("clave2").focus();
         			return false;
     	  	    }
     	  	    if(document.getElementById("mail").value == "") { 
         			alert("Debes escribir tu correo.");
         			document.getElementById("mail").focus();
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
			<div class="logo">
				<h2 id="l1">Muebles Todo Hogar</h2>
			</div>

		</div>
		<!--Menu:-->
		<div id="menu">
			<nav> <!--Navegador o menu de la pagina: -->
				<a class="link" href="index.php">Inicio</a>
				<a class="link" href="seccion_mascotas.php">Mascotas</a>
				<a class="link" href="seccion_decohogar.php">Decohogar</a>
				<a class="link" href="seccion_infantil.php">Niños</a>
				<a class="link" href="seccion_contactos.php">Contactos</a>
				<a href="seccion_compras.php"> <img id="carro" src="img/cart.png"> </a>
			</nav>
		</div>
		<!--Contenido: -->
		<div id="contenido">
			<div class="formulario"> <!--FORMULARIO PARA CREAR CUENTAS:-->
				<form id="fc" onsubmit="return Validar()" method="post" action="new_cuenta.php">
					Usuario:<br>                                        
					<input id="nk" type="text" name="nick" placeholder="Ingrese nombre de usuario"/><br>
					Nombre:<br>                                        
					<input id="nom" type="text" name="nombre" placeholder="Primer nombre"/><br>
					Apellido:<br>                                        
					<input id="ap" type="text" name="apellido" placeholder="Apellido paterno"/><br>
					Fecha de Nacimiento:<br>
					<input id="fn" type="datatime" name="fn" placeholder="año-mes-dia"/><br>
					Contrase&ntilde;a:<br>
					<input id="clave" type="password" name="clave"/><br>
					Confirmar Contrase&ntilde;a:<br>
					<input id="clave2" type="password" name="clave2"/><br>
					Correo:<br>
					<input id="mail" type="email" name="correo" placeholder="ejemplo@gmail.com"/><br><br>
					<input class="enviar" type="submit" name="enviar" value="Enviar"/>
				</form>
			</div>
		</div>
		<!--Footer-->
		<div id="footer">

		</div>
	</body>
</html>