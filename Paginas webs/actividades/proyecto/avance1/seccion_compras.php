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
		<title>compras/title>

		<!--JavaScript-->
		<script type="text/javascript">
   			function Validar(){ //Verifica si los datos siguientes existen:
      			if(document.getElementById("rut").value == "") { //Usuario
         			alert("Debes escribir tu Rut.");
         			document.getElementById("rut").focus();
         			return false;
     	  	    }
      			if(document.getElementById("nombre").value == "") {  
         			alert("Debes escribir tu nombre.");
        			document.getElementById("nombre").focus();
        		    return false;
      			}
      			if(document.getElementById("apellido").value == "") { 
         			alert("Debes escribir tu apellido.");
         			document.getElementById("apellido").focus();
         			return false;
     	  	    }
     	  	    if(document.getElementById("edad").value == "") { 
         			alert("Debes escribir tu edad.");
         			document.getElementById("edad").focus();
         			return false;
     	  	    }
     	  	    if(document.getElementById("clave").value == "") { 
         			alert("Debes escribir tu clave.");
         			document.getElementById("clave").focus();
         			return false;
     	  	    }
     	  	    if(document.getElementById("clave2").value == "") { 
         			alert("Debes escribir Confirmar tu clave.");
         			document.getElementById("clave2").focus();
         			return false;
     	  	    }
     	  	    if(document.getElementById("clave2").value != "clave" || document.getElementById("clave2").value != "") { 
         			alert("Tu clave esta mal escrita.");
         			document.getElementById("clave2").focus();
         			return false;
     	  	    }
     	  	    if(document.getElementById("correo").value == "") { 
         			alert("Debes escribir tu correo.");
         			document.getElementById("correo").focus();
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
			<!--Inicio de sesion: -->
            <?php

                if ($usuario==""){ // SI NO EXISTE UN USUARIO CONECTADO:
                    echo "<div id=\"logear\">";
                    echo "  <form id=\"logeo\" method=\"post\" action=\"login.php\">";  
                    echo "      Usuario: <br>";     
                    echo "      <input type=\"text\" name=\"user\"/><br>";      
                    echo "      Clave: <br>";
                    echo "      <input type=\"password\" name=\"clave\"/><br>";
                    echo "      <input type=\"submit\" value=\"Entrar\"/>";     
                    echo "      <button> <a href=\"crear_cuenta.php\">Crear Cuenta</a> </button>";      
                    echo "  </form>";       
                    echo "</div>";  
                }   
                else{ // SI EXISTE USUARIO CONECTADO:
                    echo "<div id=\"logear\">";
                    echo "  <div id=\"logeo\">";
                    echo "      Usuario: ".$usuario."<br>";
                    echo "      <a href=\"config_cuenta.php\"> Perfil cuenta </a><br>"; 
                    echo "      <a href=\"seccion_compras.php\"> Ver Carro </a><br>";
                    echo "      <form  action=\"index.php\" method=\"post\">";
                    echo "          <input type=\"submit\" name=\"cerrar\" value=\"Cerrar Sesion\"/><br>";
                    echo "      </form>";
                    echo "  </div>";
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

			</div>
		</div>
		<!--Footer-->
		<div id="footer">

		</div>
	</body>
</html>